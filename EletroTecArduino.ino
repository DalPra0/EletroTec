#include <Ethernet.h>
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>
#include "EmonLib.h"
#include <LiquidCrystal.h>

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
IPAddress ip(192, 168, 1, 177);
char server[] = "localhost/phpmyadmin"; // Substitua pelo endereço IP do seu servidor MySQL
EthernetClient client;
MySQL_Connection conn((Client *)&client);
char username[] = "root";
char password[] = "";

EnergyMonitor emon1;
LiquidCrystal lcd(12, 11, 5, 4, 3, 2);

int rede = 110;
int pino_sct = 1;

void setup() {
  lcd.begin(16, 2);
  lcd.clear();
  Serial.begin(9600);

  emon1.current(pino_sct, 29);

  lcd.setCursor(0, 0);
  lcd.print("Reais.(R$):");
  lcd.setCursor(0, 1);
  lcd.print("Pot. (W):");

  Ethernet.begin(mac, ip);
  delay(1000);

  // Use a função IPAddress para converter o endereço IP de string para um objeto IPAddress
  IPAddress serverIP;
  serverIP.fromString(server);

  if (conn.connect(serverIP, 3306, username, password)) {
    delay(1000);
  } else {
    Serial.println("Falha na conexão.");
  }
}

void loop() {
  double Irms = emon1.calcIrms(1480);
  double Watts = (Irms * rede / 100);

  Serial.print("Potencia : ");
  Serial.println(Watts);
  lcd.setCursor(10, 1);
  lcd.print("      ");
  lcd.setCursor(10, 1);
  lcd.print(Watts, 1);

  double Reais = Irms * rede * 0.65313 / 100;
  Serial.print("Reais : ");
  Serial.println(Reais);
  lcd.setCursor(10, 0);
  lcd.print("      ");
  lcd.setCursor(10, 0);
  lcd.print(Reais);

  char INSERT_SQL[] = "INSERT INTO leitura (watts, reais) VALUES (%f, %f)";
  char query[128];

  sprintf(query, INSERT_SQL, Watts, Reais);

  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
  cur_mem->execute(query);
  delete cur_mem;

  delay(1000);
}