@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div id="chart"></div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Performance Chart'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Values'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
                name: 'Score',
                data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0]

            },

        ]
    });
</script>
@endsection