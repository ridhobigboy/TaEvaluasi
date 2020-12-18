@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
{{-- <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <!-- DONUT CHART -->
         <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Donut Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="donutChart" style="height: 230px; min-height: 230px; display: block; width: 487px;" width="487" height="230" class="chartjs-render-monitor"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- PIE CHART -->
        <div class="card card-danger">
          <div class="card-header">
            <h3 class="card-title">Pie Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
            <canvas id="pieChart" style="height: 230px; min-height: 230px; display: block; width: 487px;" width="487" height="230" class="chartjs-render-monitor"></canvas>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col (LEFT) -->
      <div class="col-md-6">

        <!-- BAR CHART -->
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Bar Chart</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <canvas id="barChart" style="height: 230px; min-height: 230px; display: block; width: 487px;" width="487" height="230" class="chartjs-render-monitor">
                <script type="text/javascript">
                    $(kuisionerkelas(){
                        var ctx= document.getElementById("kuisionerkelas").getContext('jawaban_id');
                        var kuisionerkelas = new Chart(ctx,{
                            type: 'bar',
                            data: {
                                labels:
                            }
                        })
                    })
                </script>
              </canvas>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
         <!-- DONUT CHART -->
         <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">Donut Chart</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
              </div>
            </div>
            <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
              <canvas id="donutChart" style="height: 230px; min-height: 230px; display: block; width: 487px;" width="487" height="230" class="chartjs-render-monitor"></canvas>
            </div>
            <!-- /.card-body -->
          </div>
      </div>
      <!-- /.col (RIGHT) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid --> --}}
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Charts</b></div>
            <div class="panel-body">
                <canvas id="canvas" height="280" width="600"></canvas>
            </div>
        </div>
    </div>
  </div>
  <script>
    var url = "{{url('stock/chart')}}";
    var Years = new Array();
    var Labels = new Array();
    var Prices = new Array();
    $(document).ready(function(){
      $.get(url, function(response){
        response.forEach(function(data){
            Years.push(data.stockYear);
            Labels.push(data.stockName);
            Prices.push(data.stockPrice);
        });
        var ctx = document.getElementById("canvas").getContext('2d');
            var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels:Years,
                  datasets: [{
                      label: 'Infosys Price',
                      data: Prices,
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
      });
    });
    </script>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/css/bootstrap-select.min.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>

@stop

