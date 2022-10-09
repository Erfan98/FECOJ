@extends('layouts/master')
@section('body')
{{-- <h1>Welcome To FEC OJ(Beta Version 1.0.0)</h1>
<code>
    Currently The judge allows 48+ Language
</code>
<br>

<h3>Feel free to contribute </h3>
<code>Erfan Ahmed Siam </code>
<code>(erfan.siam98@gmail.com)</code> --}}
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h3 class="display-5 fw-bold welcome"  style="display: inline-block"></h3>
      <p class="col-md-8 fs-4">Currently Its in Beta phase,if you find any exception or bug please contact
       <a href="mailto:erfan.siam98@gmail.com">erfan.siam98@gmail.com</a> </p>
      <a class="btn btn-primary btn-lg" href="/login" role="button">Join FEC OJ</a>
      <a class="btn btn-outline-primary btn-lg" href="/login" role="button">Host Contest</a>
    </div>
  </div>
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
    {{-- table-primary --}}
    align-middle">
        <thead class="table-light">
            <tr>
                <th>Handle</th>
                {{-- <th>Solved</th> --}}
            </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach (\App\Models\User::all() as $user)
                <tr>
                    <td>{{$user->handle}}</td>
                    {{-- <td scope="row">6</td> --}}

                </tr>
                @endforeach
            </tbody>
    </table>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js" integrity="sha512-zKaK6G2LZC5YZTX0vKmD7xOwd1zrEEMal4zlTf5Ved/A1RrnW+qt8pWDfo7oz+xeChECS/P9dv6EDwwPwelFfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var typed = new Typed('.welcome', {
  strings: ["WELCOME TO FEC OJ(BETA)", "The Place for Competitive Programmers"],
  typeSpeed: 100
});
</script>
@endsection
