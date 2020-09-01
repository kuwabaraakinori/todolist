@extends('layouts.app')
@section('content')
@if (count($users)>0)
    <div class="container">
        <h2 class="container-title" style="font-family:serif; text-align:center; margin-top:20px;">ユーザー一覧</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User_Name</th>
                <th scope="col">URL</th>
            </tr>
            </thead>
            @foreach ($users as $user)
            <tbody>
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ link_to_route('user.show' , 'View Profile' , $user->id) }}</td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>
@endif
@endsection
