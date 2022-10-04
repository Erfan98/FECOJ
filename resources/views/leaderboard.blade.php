@extends('layouts.masterWithoutside')

@section('body')
<div class="table-responsive">
    <table class="table table-striped" id="leaderboard">
        <thead>
            <tr>
                <th scope="col">Rank</th>
                <th scope="col">Handle</th>
                <th scope="col">Full Name</th>
                <th scope="col">Institutions</th>
                <th scope="col">Solved</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="">
                <td scope="row">{{$loop->iteration}}</td>
                <td>{{$user->handle}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->institution}}</td>
                <td>{{userSolved($user->id)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script')
<script>
    $('#leaderboard').DataTable({
                // order: [
                //     [0, "desc"]
                // ],
                lengthMenu: [
                    [50, 100, 200, -1],
                    [50, 100, 200, 'All'],
                ]
            }
        );
</script>
@endsection
