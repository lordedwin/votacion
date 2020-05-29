@extends('layouts.app', [
    'namePage' => 'Home',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'home',
    'backgroundImage' => asset('now') . "/img/bg14.jpg",
])

@section('content')
<div class="panel-header m-b-15" style="height: 50px;">
</div>     

  

  <div class="row">
    <div class="col-md-2">
    </div>
    <div>
      <div>
        <h3 align="center"> TOTAL DE VOTOS: {{$total}} </h3>
      </div>
      <canvas id="myChart" style="width: 700px; height: 400px;"></canvas>
    </div>
  </div>


@endsection

@push('js')
  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels:[
        @foreach($candidatos as $candidato) 
         '{{$candidato->nombre}}',
        @endforeach
        ],
        datasets: [{
            label: 'Votos',
            backgroundColor: [
              'rgb(51, 83, 184)', 'rgb(184, 63, 51)', 'rgb(97, 184, 51)', 'rgb(246, 255, 51)',
              'rgb(45, 25, 84)', 'rgb(51, 160, 184)', 'rgb(51, 61, 184)', 'rgb(184, 178, 51)',
              'rgb(176, 51, 184)', 'rgb(107, 51, 184)', 'rgb(51, 140, 184)'],
            data: ['{{$votos}}', '{{$votos1}}', '{{$votos2}}', '{{$votos3}}', '{{$votos4}}', '{{$votos5}}','{{$votos7}}']
        }]
      },
      options: {
        scales:{
          yAxes:[{
            ticks:{
              beginAtZero:true,
              suggestedMax: 50,
              stepSize: 5
            }
          }]
        }
      }
    });
  </script>
@endpush