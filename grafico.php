<!DOCTYPE html>
<html>
<head>
    <title>Gráfico Mensal de Consumo de Energia</title>
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
        canvas {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            max-width: 1200px;
            height: 400px; /* Aumento da altura do gráfico */
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
    <h1>Gráfico Mensal de Consumo de Energia</h1>
    <canvas id="consumoEnergiaChart"></canvas>
    
    <a id="voltarButton" href="tcc.html">Voltar para a Tela Inicial</a>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Dados de exemplo para o gráfico (substitua por seus próprios dados)
        var data = {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro'],
            datasets: [{
                label: 'Consumo de Energia (kWh)',
                data: [580, 530, 520, 550, 570, 530, 575, 560, 570],
                backgroundColor: 'rgba(52, 152, 219, 0.6)',
                borderColor: 'rgba(52, 152, 219, 1)',
                borderWidth: 1
            }, {
                label: 'Gastos em Reais',
                data: [378.81, 346.15, 339.62, 342.72, 372.28, 346.15, 375.54, 365.75, 372.28], // Valores de exemplo em Reais
                backgroundColor: 'rgba(241, 196, 15, 0.6)', // Cor de exemplo
                borderColor: 'rgba(241, 196, 15, 1)', // Cor de exemplo
                borderWidth: 1
            }]
        };

        // Configurações do gráfico
        var config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Consumo de Energia (kWh) / Gastos em Reais'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Mês'
                        }
                    }
                }
            }
        };

        var ctx = document.getElementById('consumoEnergiaChart').getContext('2d');
        new Chart(ctx, config);
    </script>
</body>
</html>