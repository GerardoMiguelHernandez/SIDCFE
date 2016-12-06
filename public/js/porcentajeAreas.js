 $(function () {
    
    Highcharts.chart('container1', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: 'Browser market shares at a specific website, 2014'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y}</b>: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Browser share',
            data: [
            ['Firefox1', 45],
                ['IE', 26],
                {
                    name: 'Chrome',
                    y: {{$count_evaluaciones}}
                    
                },
                 {
                    name: 'Firefox',
                    y: {{$count_colaboradores}},
                    sliced: true,
                    selected: true
                }
                
            ]
        }]
    });
});