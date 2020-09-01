@extends('layouts.app')
@section('content')
    @if (count($contents)>0)
    <div class="container">
    <h2 class="title" style="font-family:serif; text-align:center; margin-top:20px; border-bottom:solid 2px #CC99CC">投稿一覧</h2>
    <div class="row">
        @foreach ($contents as $content)
        <div class="col-md-4 text-left mt-4">

          <div class="card" style="margin-bottom: 20px;">
              <div class="card-title" style="background-color: rgba(0,0,0,.03);">
                  <p class="text-black-50" style="text-align:center; font-weight:bolder; font-family:serif; margin-top: 10px;">{{ $content->title }}</p>
              </div>
              <div class="card-body">
                  <p class="text-black-50"> {{ $content->content }} </p>
              </div>

            <div class="card-footer text-right">
              @if(Auth::id() === $content->user_id)
                {!! Form::open(['route' => ['content.edit' , $content->id] , 'method' => 'get']) !!}
                {!! Form::submit('編集', ['class' => 'text-info']) !!}
                {!! Form::close() !!}

                {!! Form::open(['route' => ['content.destroy', $content->id], 'method' => 'delete']) !!}
                {!! Form::submit('完了', ['class' => 'text-info']) !!}
                {!! Form::close() !!}
              @else
              <p class="text">{{ $content->created_at }}</p>
              @endif
            </div>

          </div>

        </div>
        @endforeach

      </div>
  </div>
    @else
    <h2 class="title"  style="font-family:serif; text-align:center; margin-top:20px;">本日の投稿はありません</h2>
    @endif
    <span style="text-align: center;">{{ $contents->links() }}</span>
@endsection

