# Leitor de Corrente Elétrica

## Descrição do Projeto
O **Leitor de Corrente Elétrica** é um sistema projetado para monitorar e analisar o consumo de energia elétrica em tempo real, utilizando Arduino, sensores de corrente, e tecnologias web. Este projeto visa oferecer aos usuários um controle aprimorado sobre o consumo energético em suas residências, promovendo a eficiência energética e contribuindo para a redução dos custos e do impacto ambiental.

## Funcionalidades

1. **Monitoramento em Tempo Real**:
   - O sistema utiliza um sensor de corrente SCT013 acoplado a um Arduino Uno para medir o consumo de energia em tempo real. Os dados são exibidos em uma tela LCD e enviados para um servidor, onde são processados e armazenados.

2. **Interface Web**:
   - Desenvolvida em HTML e PHP, a interface web permite que os usuários visualizem gráficos detalhados do consumo de energia ao longo do tempo, incluindo o cálculo de gastos mensais em reais e watts.

3. **Armazenamento e Processamento de Dados**:
   - Os dados coletados são armazenados em um banco de dados MySQL, permitindo a análise histórica do consumo energético e a identificação de padrões que possam resultar em economia de energia.

4. **Integração de Hardware**:
   - O projeto utiliza componentes como o Ethernet Shield W5100 para conectar o Arduino à internet, facilitando a comunicação entre o hardware e a interface web.

5. **Construção de Protótipos**:
   - O projeto foi inicialmente desenvolvido e testado no Tinkercad antes de sua construção física, que envolveu a criação de uma maquete para demonstrar o funcionamento do sistema em um ambiente controlado.

## Tecnologias Utilizadas

- **Hardware**:
  - Arduino Uno
  - Ethernet Shield W5100
  - Sensor de Corrente SCT013
  - Display LCD I2C
  - Capacitores, Resistores, Protoboard

- **Software**:
  - **C++**: Utilizado para programar o Arduino e controlar os sensores.
  - **MySQL**: Sistema de gerenciamento de banco de dados utilizado para armazenar os dados de consumo energético.
  - **HTML e CSS**: Utilizados para construir a interface web do projeto.
  - **PHP**: Responsável pela comunicação entre a interface web e o banco de dados.

## Instruções de Instalação

1. **Configuração do Arduino**:
   - Carregue o código C++ no Arduino Uno utilizando a IDE do Arduino.
   - Conecte o sensor SCT013 ao Arduino conforme o esquema de montagem.

2. **Configuração do Servidor**:
   - Instale o XAMPP para configurar o servidor Apache e MySQL.
   - Coloque os arquivos PHP e HTML na pasta `htdocs` do XAMPP.
   - Crie um banco de dados MySQL e importe o esquema fornecido.

3. **Execução**:
   - Ligue o Arduino e verifique se o sistema está coletando dados corretamente.
   - Acesse a interface web pelo navegador para visualizar os dados em tempo real e históricos.

## Resultados Esperados

O **Leitor de Corrente Elétrica** é capaz de detectar com precisão o consumo de energia de dispositivos conectados, fornecendo dados que podem ser utilizados para reduzir o consumo de energia desnecessário e economizar dinheiro. A longo prazo, a implementação deste sistema pode levar a uma redução significativa do consumo de energia em residências e empresas.

## Considerações Finais

Este projeto não apenas contribui para a conscientização sobre o consumo de energia, mas também oferece uma ferramenta prática para a gestão eficiente de recursos energéticos. Futuras expansões podem incluir a integração com sistemas de automação residencial e a utilização de inteligência artificial para otimizar o consumo de energia.
