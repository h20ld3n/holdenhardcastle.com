var randomScalingFactor = function() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };

    var barChartData = {
        labels: ["wk 1", "wek 2", "wk 3", "wk 4", "wk 5"],
        datasets: [{
            label: 'Applications',
            backgroundColor: "rgba(90,90,90,0.5)",
            data: [53, 56, 64, 62, 85],
            borderColor: 'white',
            borderWidth: 2
        }, {
            label: '2X Applications',
            backgroundColor: "rgba(130,130,130,0.5)",
            data: [96, 193, 253, 229, 378],
            borderColor: 'white',
            borderWidth: 2
        }, {
            type: 'line',
            label: 'Approvals',
            backgroundColor: "rgba(130,130,130,0.5)",
            data: [70, 120, 170, 230, 322],
		}, {
           	type: 'line',
            label: '2X Approvals',
            backgroundColor: "rgba(200,200,200,0.5)",
            data: [137, 342, 595, 824, 1202],
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