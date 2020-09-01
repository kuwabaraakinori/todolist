@extends('layouts.app')
@section('content')
<h2 class="title" style= "font-family:serif; font-weight:bolder; text-align:center; margin-top:20px;">タスク編集</h2>
<div class="content-form">
    {!!  Form::model($content , ['route' => ['content.update' , $content->id] , 'method' => 'put' ])  !!}
    @csrf
    <div class="form-group">
        <label for="exampleFormControlInput1">タイトル</label>
        <input type="text" class="form-control" name="title" value="{{ old('title' , $content->title) }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">するべきこと</label>
        <input type="textarea" name="content" class="form-control" value="{{ old('content' , $content->content) }}">
    </div>
    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    <button type="submit" class="btn btn-success">編集</button>
    <a href="/" class="btn btn-info">戻る</a>
    {!!  Form::close() !!}
</div>
@endsection
