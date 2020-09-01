@extends('layouts.app')
@section('content')
<h2 class="title"  style= "font-family:serif; font-weight:bolder; text-align:center; margin-top:20px;">タスク投稿</h2>
<form action="{{ route('content.store') }}" method="post">
    @csrf
    <div class="content-form" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">タイトル</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">するべきこと</label>
            <input type="textarea" name="content" class="form-control" value="{{old('content')}}">
        </div>
        @if ($errors->any())
          @foreach ($errors->all() as $error)
              <p class="text-right text-black-50">{{ $error }}</p>
          @endforeach
        @endif
        <button type="submit" class="btn btn-success">投稿</button>
         <a href="/" class="btn btn-info">戻る</a>
        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
    </div>
</form>
@endsection
