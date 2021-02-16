@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2><center><strong>Gong Xi Fachai</strong></center></h2>
<div id="container"></div>
@stop

 @section('js')
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
 var baru = <?php echo json_encode($kuisionerkelas ?? 'jawaban_id')?>)
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
        name: 'Sangat Tidak Setuju',
        y: 61.41,
        sliced: true,
        selected: true
    }, {
        name: 'Tidak Setuju',
        y: 11.84
    }, {
        name: 'Agak Setuju',
        y: 10.85
    }, {
        name: 'Setuju',
        y: 4.67
    }, {
        name: 'Sangat Setuju',
        y: 4.18
        }]
        }]
    });
</script>
@stop

