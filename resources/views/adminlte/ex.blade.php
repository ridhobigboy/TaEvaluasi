@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2 style="text-align: center;"><strong>Gong Xi Fachai</strong></h2>
<div id="container"></div>
@stop

 @section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    // Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Apkah Dosen Menguasai Materi Dan Menyanpaikan Dengan Baik'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'Tidak Setuju',
            y: {!! json_encode($datas) !!}
        }, {
            name: 'Agak Setuju',
            y: 10.85
        }, {
            name: 'Setuju',
            y: 4.67
        }, {
            name: 'Sangat Setuju',
            y: 4.18,
            sliced: true,
            selected: true
        }]
    }]
});
</script>

@stop

