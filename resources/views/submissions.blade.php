@extends('layouts/master')

@section('body')
{{-- @dd($submissions); --}}
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">When</th>
        <th scope="col">Who</th>
        <th scope="col">Problem</th>
        <th scope="col">Lang</th>
        <th scope="col">Verdict</th>
        <th scope="col">Time</th>
        <th scope="col">Memory</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($submissions as $submission)
      <tr>
        <th scope="row">{{$submission->id}}</th>
        <td>{{$submission->created_at->diffForHumans()}}</td>
        <td>{{$submission->who}}</td>
        <td>{{$submission->problem}}</td>
        <td>{{$submission->lang}}</td>
        <td>{{$submission->verdict}}</td>
        <td>{{$submission->time}}</td>
        <td>{{$submission->memory}}</td>
      </tr>
      @endforeach
      {{-- <tr>
        <th scope="row">1</th>
        <td>Sep/08/2022 21:15UTC+6</td>
        <td>Ovicorsho</td>
        <td>Basic Problem</td>
        <td>Basic Problem</td>
        <td>Python</td>
        <td>380 ms</td>
        <td>1 MB</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sep/08/2022 21:15UTC+6</td>
        <td>Ovicorsho</td>
        <td>Basic Problem</td>
        <td>Basic Problem</td>
        <td>Python</td>
        <td>380 ms</td>
        <td>1 MB</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sep/08/2022 21:15UTC+6</td>
        <td>Ovicorsho</td>
        <td>Basic Problem</td>
        <td>Basic Problem</td>
        <td>Python</td>
        <td>380 ms</td>
        <td>1 MB</td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Sep/08/2022 21:15UTC+6</td>
        <td>Ovicorsho</td>
        <td>Basic Problem</td>
        <td>Basic Problem</td>
        <td>Python</td>
        <td>380 ms</td>
        <td>1 MB</td>
      </tr> --}}
    </tbody>
  </table>

@endsection
