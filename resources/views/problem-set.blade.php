@extends('layouts.masterWithoutside')

@section('body')
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>CPU Limit</th>
                <th>Memory Limit</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($problems as $problem)
            <tr class="">
                <td scope="row">{{$problem->id}}</td>
                <td><a href="/p/{{$problem->id}}">{{$problem->title}}</a></td>
                <td>{{$problem->cpu_limit}}</td>
                <td>{{$problem->mem_limit}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
