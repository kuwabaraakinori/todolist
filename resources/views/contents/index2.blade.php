@extends('layouts.app')
@section('content')
    @if (count($contents)>0)
    <div class="container">
        <h2 class="title" style="font-family:serif; text-align:center; margin-top:20px;">本日の投稿</h2>
        @foreach ($contents as $content)
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">タイトル</th>
                <th scope="col">内容</th>
                <th scope="col">投稿時間</th>
                <th scope="col">完了</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{ $content->id }}</th>
                <td>{{ $content->title }}</td>
                <td>{{ $content->content }}</td>
                <td>{{ $content->created_at }}</td>
                <td>
                    @if (Auth::check())

                        {!! Form::open(['route' => ['content.edit' , $content->id] , 'method' => 'get']) !!}
                        {!! Form::submit('編集', ['class' => 'text-info']) !!}
                        {!! Form::close() !!}  
                        
                        {!! Form::open(['route' => ['content.destroy', $content->id], 'method' => 'delete']) !!}
                        {!! Form::submit('削除', ['class' => 'text-info']) !!}
                        {!! Form::close() !!} 
                    @endif
                </td>
              </tr>
            </tbody>
          </table>
        @endforeach
    </div>
    @else
    <h2 class="title"  style="font-family:serif; text-align:center; margin-top:20px;">本日の投稿はありません</h2>
    {{ $contents->links() }}
    @endif
@endsection

