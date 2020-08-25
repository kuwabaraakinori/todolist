@extends('layouts.app')
@section('content')
<h2 class="title"  style= "font-family:serif; font-weight:bolder; text-align:center;">タスク投稿</h2>
<form action="{{ route('content/store') }}" method="post">
    @csrf
    <div class="content-form" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">名前</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">するべきこと</label>
            <input type="textarea" name="content" class="form-control">
        </div>
        <button type="submit" value="投稿"></button>
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    </div>
</form>
@endsection
