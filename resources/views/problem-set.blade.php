@extends('layouts.masterWithoutside')

@section('body')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                @auth
                    <th>Status</th>
                @endauth
                <th>Accuracy</th>
                <th>Author</th>
                <th>Difficulty</th>

                {{-- <th>CPU Limit</th>
                <th>Memory Limit</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($problems as $problem)
            <tr class="">
                <td scope="row">{{$problem->id}}</td>
                <td><a href="/p/{{$problem->id}}">{{$problem->title}}</a></td>
                @auth
                    <td>{{userProblemStatus(Auth::user(),$problem->id)}}</td>
                @endauth

                <td data-toggle="tooltip" title="
               {{"Accepted:".\App\Models\Submissions::where('verdict','Accepted')->where('problem',$problem->id)->count()}}
               {{"Submissions:".\App\Models\Submissions::where('problem',$problem->id)->count()}}

                ">{{probelmAccuracy($problem->id)."%"}}</td>
                <td>{{$problem->user->handle}}</td>
                <td><span class="badge bg-success">Easy</span></td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection


@section('script')
<script>
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
});
</script>
@endsection

