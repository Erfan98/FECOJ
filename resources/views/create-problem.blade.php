@extends('layouts.masterWithoutside')

@section('body')
<div class="row">
    <div class="col-auto me-auto">
        <h3>Create Problem</h3>
    </div>
    <div class="col-auto">
        <input form="myform" type="submit" class="btn btn-primary" href="#" role="button"></input>
    </div>
  </div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Statements</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Testscases</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Limits</button>
    </li>
  </ul>
  <form action="/create_problem" id="myform" method="POST">
  <div class="tab-content" id="myTabContent">

        @csrf
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <br>
            @include('partials.__statements')
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            @include('partials.__testcases')
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            @include('partials.__limits')
        </div>

  </div>
</form>

@endsection
