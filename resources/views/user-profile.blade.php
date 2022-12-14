@extends('layouts.master')

@section('body')
{{-- This is {{$handle}} --}}
<div class="row justify-content-center align-items-center g-2">
    <div class="col text-end">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contest Arranged</h4>
                <p class="card-text"><h1>23</h1></p>
            </div>
        </div>
    </div>

    <div class="col text-end">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Problem created</h4>
                <p class="card-text"><h1>{{$handle->problems_count}}</h1></p>
            </div>
        </div>
    </div>

    <div class="col text-end">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Solved</h4>
                <p class="card-text"><h1>{{$solved}}</h1></p>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center align-items-center g-2">
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Verdicts</h4>
                <canvas id="verdicts" width="" height="300"></canvas>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Language Used</h4>
                <canvas id="languages" width="100" height="100"></canvas>
            </div>
        </div>
    </div>
</div>

@endsection

@section('sidebar')
{{-- <picture>
    <source srcset="https://placehold.jp/300x300.png" type="image/svg+xml">
    <img src="" class="img-fluid" alt="image desc">
</picture> --}}

<img src="{{asset('img/dp.png')}}" class="img-fluid rounded" alt="">
<br>
<h3 class="text-center">{{$handle->name}}</h3>
<h5 class="text-center">({{$handle->handle}})</h5>
    <br>
<div class="row justify-content-center align-items-center g-2">
    <div class="col text-center">
        <h5>55</h5>
        <p>Contest</p>
    </div>

    <div class="col text-center">
        <h5>{{$solved}}</h5>
        <p>Solved</p>
    </div>

    <div class="col text-center">
        <h5>{{$handle->submissions_count}}</h5>
        <p>Submissions</p>
    </div>
</div>
@endsection

@section('sidebar-ext')
<div class="ms-4">
    <h6>{{$handle->complany}}</h6>
    <h6><a href="#">{{$handle->insititute}}</a></h6>
    <h6><a href="#">{{$handle->email}}</a></h6>
    <h6>{{$handle->location}}</h6>
    <h6><a href="http://{{$handle->website}}">{{$handle->website}}</a></h6>
    <h6>Last Seen 5 minutes ago</h6>
    <h6>Joined on {{Carbon\Carbon::parse($handle->created_at)->format('d M Y')}}</h6>
</div>


@endsection

@section('script')
<script>
const myChart = new Chart($('#verdicts'), {
    type: 'bar',
    data: {
        labels: ['AC', 'WA', 'TLE', 'MLE', 'RE', 'CE'],
        datasets: [{
            label: 'Verdicts',
            data: [{{$handle->submissions_ac}}, {{$handle->submissions_wa}},{{$handle->submissions_tle}},{{$handle->submissions_mle}},{{$handle->submissions_re}},{{$handle->submissions_ce}}],
            backgroundColor: [
                '#53BF9D',
                '#F94C66',
                '#BD4291',
                '#3AB0FF',
                '#FFC54D',
                '#9EB23B'
            ]
        }]
    },
    scales: {
  xAxes: [{
    display: true,
    scaleLabel: {
      display: true,
      labelString: 'Month'
    }
  }],
  yAxes: [{
    display: true,
    scaleLabel: {
      display: true,
      labelString: 'Value'
    },
    ticks: {
      min: 0,
      max: 100,

      // forces step size to be 5 units
      stepSize: 10 // <----- This prop sets the stepSize
    }
  }]
}

});


const newChart = new Chart($('#languages'), {
    type: 'pie',
    //data:@json($languages),
    data: {
        labels: @json($languages),
        datasets: [{
            label: 'Languages',
            data: @json($languages_count),
            backgroundColor: [
                '#53BF9D',
                '#F94C66',
                '#BD4291',
                '#3AB0FF',
                '#FFC54D',
                '#9EB23B'
            ],
            // borderColor: [
            //     'rgba(255, 99, 132, 1)',
            //     'rgba(54, 162, 235, 1)',
            //     'rgba(255, 206, 86, 1)',
            //     'rgba(75, 192, 192, 1)',
            //     'rgba(153, 102, 255, 1)',
            //     'rgba(255, 159, 64, 1)'
            // ],
            borderWidth: 1
        }]
    },
});
</script>

@endsection
