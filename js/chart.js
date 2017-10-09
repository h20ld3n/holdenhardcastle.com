var randomScalingFactor = function() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };

    var barChartData = {
        labels: [".", ".", ".", ".", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"],
			color: 'white',
        datasets: [{
            label: 'Dataset 1',
            backgroundColor: "rgba(151,187,205,0.5)",
            data: [15, 17, 2, 1, , 19, 17, 12, 10, 17, 1, 1, 11, 11, 29, 13, 1, 1, 14, 11, 12, 14, 9, 2, 0, 25, 19, 12, 11, 18],
            borderColor: 'white',
            borderWidth: 2
        }, {
            label: 'Dataset 2',
            backgroundColor: "rgba(151,187,205,0.5)",
            data: [13, 1, 49, 1, 1, 34, 41, 59, 11, 1, 44, 38, 54, 58, 12, 1, 78, 51, 41, 58, 66, 12, 1, 52, 64, 61, 53, 83, 12, 105],
            borderColor: 'white',
            borderWidth: 2
        }, {
            type: 'line',
            label: 'Dataset 3',
            backgroundColor: "rgba(220,220,220,0.5)",
            data: [1.5, 3.2, 3.4, 3.4, 5.3, 7.0, 8.2, 9.2, 10.9, 10.9, 10.9, 12.0, 13.1, 15.0, 16.3, 17.0, 17.0, 17.0, 18.4, 19.5, 20.7, 22.1, 23.0, 23.02, 23.2, 25.7, 27.6, 28.8, 29.9, 31.7, 32.2],
		}, {
           	type: 'line',
            label: 'Dataset 4',
            backgroundColor: "rgba(220,220,220,0.5)",
            data: [1.3, 1.3, 6.2, 6.2, 9.6, 13.7, 19.6, 20.7, 20.7, 25.7, 30.4, 34.2, 39.6, 45.4, 46.6, 46.6, 54.4, 59.5, 63.6, 69.4, 76.0, 77.2, 77.2, 82.4, 88.8, 94.9, 100.2, 108.0, 109.7, 109.7, 120.2],
        }, ]
    };
var myBar = null;
    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        myBar = new Chart(ctx, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
            }
        });
    };

    $('#randomizeData').click(function() {
        $.each(barChartData.datasets, function(i, dataset) {
            dataset.backgroundColor = 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',.7)';
            dataset.data = [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()];

        });
        myBar.update();
    });