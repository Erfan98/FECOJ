@extends('layouts/master')

@section('body')


    <div class="card-body">
        <h2 class="card-title">Card title</h2>
        Dima and his friends have been playing hide and seek at Dima's place all night. As a result, Dima's place got messy. In the morning they decided that they need to clean the place.

        To decide who exactly would clean the apartment, the friends want to play a counting-out game. First, all the guys stand in a circle, and then each of them shows some number of fingers on one hand (one to five), and then the boys count in a circle, starting from Dima, the number of people, respective to the total number of fingers shown. The person on who the countdown stops will clean the apartment.

        For example, if Dima and one of his friends played hide and seek, and 7 fingers were shown during the counting-out, then Dima would clean the place. If there were 2 or say, 8 fingers shown, then his friend would clean the place.

        Dima knows how many fingers each of his friends will show during the counting-out. Now he is interested in the number of ways to show some number of fingers on one hand (one to five), so that he did not have to clean the place. Help Dima.
        <h2>Input</h2>

        <div class="input-block">
            6
            logic
            codeforces
            bca
            aaaaaaaaaaa
            adbaadabad
            to
        </div>
        <h2>Output</h2>
        <div class="output-block">
            6
            logic
            codeforces
            bca
            aaaaaaaaaaa
            adbaadabad
            to
        </div>
  </div>
@endsection

@section('sidebar')
<div class="card">
    {{-- @dd(langauges()) --}}
    <div class="card-body">
        <h3>Submit a solution</h3>

        <form action="/submit" method="post" enctype="multipart/form-data">
            @csrf
            <label for="user_id">User:</label>
            <input name="user_id" class="form-control" type="text" value="{{Auth::user()->id??0}}" aria-label="Disabled input example" hidden>
            <input class="form-control" type="text" placeholder="{{Auth::user()->name??"Annonymus"}}" aria-label="Disabled input example" disabled>


            <label for="problem_id">User:</label>
            <input name="problem_id" class="form-control" type="text" value="420" aria-label="Disabled input example" hidden>
            <input class="form-control" type="text" placeholder="Problem ID: 420" aria-label="Disabled input example" disabled>

            <label for="language">Choose a Language:</label>
            <select class="form-select" id="language" name="language">
            @foreach (langauges() as $lang)
            <option value={{$lang["id"]}}>{{$lang["name"]}}</option>
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





    </div>
  </div>
@endsection
