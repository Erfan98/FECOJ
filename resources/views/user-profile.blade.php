@extends('layouts.master')

@section('body')
{{-- This is {{$handle}} --}}
<div class="row justify-content-center align-items-center g-2">
    <div class="col text-end">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contests</h4>
                <p class="card-text"><h1>23</h1></p>
            </div>
        </div>
    </div>

    <div class="col text-end">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Solved</h4>
                <p class="card-text"><h1>23</h1></p>
            </div>
        </div>
    </div>

    <div class="col text-end">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Submission</h4>
                <p class="card-text"><h1>23</h1></p>
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
                <canvas id="languages" width="100" height="100"></canvas
            </div>
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

<img src="https://placehold.jp/300x300.png" class="img-fluid rounded-top" alt="">
<br>
<h3 class="text-center">Erfan Ahmed Siam</h3>
<h5 class="text-center">(Ovicorsho)</h5>
    <br>
<div class="row justify-content-center align-items-center g-2">
    <div class="col text-center">
        <h5>55</h5>
        <p>Contest</p>
    </div>

    <div class="col text-center">
        <h5>55</h5>
        <p>Solved</p>
    </div>

    <div class="col text-center">
        <h5>55</h5>
        <p>Submissions</p>
    </div>
</div>
@endsection

@section('sidebar-ext')
<div class="ms-4">
    <h6>Magic Office LTD</h6>
    <h6><a href="#">Faridpur Engineering College</a></h6>
    <h6><a href="#">erfan.siam98@gmail.com</a></h6>
    <h6>Dhaka, Bangladesh</h6>
    <h6>imerfan.com</h6>
    <h6>Last Seen 5 minutes ago</h6>
    <h6>Joined 18 April 2018</h6>
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
            data: [1, 2, 3, 3, 2, 3],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});


const newChart = new Chart($('#languages'), {
    type: 'pie',
    data: {
        labels: ['C++', 'Java', 'Python3', 'C', 'Ruby', 'CE'],
        datasets: [{
            label: 'Verdicts',
            data: [10, 4, 3, 3, 2, 3],
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
});
</script>

@endsection
