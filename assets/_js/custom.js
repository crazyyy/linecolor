var elementChart = document.getElementById('chartjs-4');
if (typeof (elementChart) != 'undefined' && elementChart != null) {
    new Chart(elementChart, {
        "type": "doughnut",
        "data": {
            "labels": ["11", "10", "9", "8", "7", "6", "5", "4", "3", "2", "1"],
            "datasets": [{
                "label": "", "data": [31, 2, 3, 3, 3, 3, 4, 5, 10, 14, 22],
                "backgroundColor": [
                    "rgb(155, 155, 155)",
                    "rgb(152, 159, 126)",
                    "rgb(187, 192, 117)",
                    "rgb(120, 132, 157)",
                    "rgb(119, 109, 172)",
                    "rgb(151, 70, 127)",
                    "rgb(123, 141, 197)",
                    "rgb(95, 134, 121)",
                    "rgb(154, 192, 67)",
                    "rgb(214, 123, 25)",
                    "rgb(194, 0, 21)"
                ]
            }]
        },
        options: {
            responsive: true,
            rotation: -0.5 * Math.PI,
            legend: {
                display: false
            },
            pieceLabel: {
                render: 'label',
                fontSize: 16,
                fontStyle: 'bold',
                fontColor: '#fff',
                fontFamily: '"Roboto", sans-serif'
            },
            tooltips: {
                enabled: false,
            }
        }
    });

    Chart.pluginService.register({
        beforeDraw: function (chart) {
            var width = chart.chart.width,
                height = chart.chart.height,
                ctx = chart.chart.ctx;

            ctx.restore();
            var fontSize = (25).toFixed(2);
            ctx.font = fontSize + "px Roboto Thin";
            ctx.textBaseline = "middle";

            var text = "Заключено:",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2 - 50;

            ctx.fillText(text, textX, textY);

            fontSize = (85).toFixed(2);
            ctx.font = fontSize + "px Roboto";
            ctx.textBaseline = "middle";
            text = "215",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2;
            ctx.fillText(text, textX, textY);

            fontSize = (25).toFixed(2);
            ctx.font = fontSize + "px Roboto Thin";
            ctx.textBaseline = "middle";
            text = "контрактов",
                textX = Math.round((width - ctx.measureText(text).width) / 2),
                textY = height / 2 + 50;
            ctx.fillText(text, textX, textY);

            ctx.save();
        }
    })
}