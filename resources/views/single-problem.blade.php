@extends('layouts.master')

@section('body')
{{-- @dd($problem) --}}
    <div class="card-body">
        <div class="h2">{!!$problem->title!!}</div>
        <div>Author: Erfan Ahmed Siam</div>
        <div>CPU Limit: {{$problem->cpu_limit}} second Memory Limit: {{$problem->mem_limit}}</div>
        {!!$problem->statement!!}
        <div class="h2">Input</div>

        <div class="input-block">
            {!!$problem->sample_input!!}
        </div>
        <div class="h2">Output</div>
        <div class="output-block">
            {!!$problem->sample_output!!}
        </div>

        <div class="h2">Notes</div>
        <div class="output-block">
            {!!$problem->notes!!}
        </div>
  </div>
@endsection

@section('sidebar')

        <h3>Submit a solution</h3>

        <form action="/submit" method="post" enctype="multipart/form-data">
            @csrf
            <label for="user_id">User:</label>
            <input name="user_id" class="form-control" type="text" value="{{Auth::user()->id??0}}" aria-label="Disabled input example" hidden>
            <input class="form-control" type="text" placeholder="{{Auth::user()->name??"Annonymus"}}" aria-label="Disabled input example" disabled>


            <label for="problem_id">User:</label>
            <input name="problem_id" class="form-control" type="text" value="{{$problem->id}}" aria-label="Disabled input example" hidden>
            <input class="form-control" type="text" placeholder="Problem ID: {{$problem->id}}" aria-label="Disabled input example" disabled>

            <label for="language">Choose a Language:</label>
            <select class="form-select" id="language" name="language">
            <option value="{{Auth::user()->default_lang??'0'}}">{{Auth::user()->lang_name->lang??'No Language Selected'}}</option>
            @foreach ($langs as $lang)
            <option value={{$lang->id}}>{{$lang->lang}}</option>
            @endforeach
            </select>

            <label for="source_code" class="form-label">Select Source Code:</label>
            <input required class="form-control" type="file" name="source_code" id="">
            <br>
            @auth
                 <button type="submit" class="btn btn-primary">Submit Solution</button>
            @endauth


            @guest
               <a class="btn btn-primary" href="/login" role="button">Login First</a>
            @endguest

        </form>
@endsection
