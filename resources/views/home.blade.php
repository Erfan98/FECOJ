@extends('layouts/master')
@section('body')
<h1>Welcome To FEC OJ(Beta Version 1.0.0)</h1>
<code>
    Currently The judge allows 48+ Language
</code>
<br>

<h3>Feel free to contribute </h3>
<code>Erfan Ahmed Siam </code>
<code>(erfan.siam98@gmail.com)</code>
@endsection

@section('sidebar')
<h4>Announcements</h4>
<p>Welcome to FEC OJ Beta Version</p>
@endsection
@section('sidebar-ext')
<h4>Leaderboard</h4>
<div class="table-responsive">
    <table class="table table-striped
    table-hover
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>Handle</th>
                <th>Solved</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach (\App\Models\User::all() as $user)
                <tr class="table-primary" >
                    <td>{{$user->handle}}</td>
                    <td scope="row">6</td>

                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection
