<!DOCTYPE html>
<html>
<head>
    <title>Valores em Tempo Real</title>
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333;
        }
        #dadosArduino {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 300px;
            box-shadow: 0 5px 10px rgba(0,0,0,0.1);
        }
        #voltarButton {
            background-color: #f6be00;
            color: #000;
            padding: 10px 20px;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Valores em Tempo Real</h1>

    <div id="dadosArduino">
        <p><strong>Valor R$:</strong> <span id="valorReal"></span></p>
        <p><strong>Valor Watts:</strong> <span id="valorWatts"></span></p>
    </div>
    
    <a id="voltarButton" href="tcc.html">Voltar para a Tela Inicial</a>

    <script>
        // Função para atualizar os valores do Arduino em tempo real
        function atualizarValores() {
            // Requisição AJAX para buscar os valores do Arduino
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'leitura_arduino.php', true);

            xhr.onload = function () {
                if (xhr.status === 200) {
                    var data = JSON.parse(xhr.responseText);

                    // Atualiza os valores na página
                    document.getElementById('valorReal').textContent = data.Reais;
                    document.getElementById('valorWatts').textContent = data.Watts;
                }
            };

            xhr.send();
        }

        // Inicia o monitoramento
        setInterval(atualizarValores, 1000);
    </script>
    
</body>
</html>