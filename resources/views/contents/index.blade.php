@extends('layouts.app')
@section('content')
    @if (count($contents)>0)
    <div class="container">
        <h2 class="title" style="text-center font-family=serif">本日の投稿</h2>
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
                        <li class="link">{{ link_to_route('content/{content}/edit' , '編集' , [$content->id] , ["class" => 'btn btn-success']) }}</li>
                        <li class="link">{{ link_to_route('content/{content}' , '削除' , ['class' => 'btn btn-danger']) }}</li>
                    @endif
                </td>
              </tr>
            </tbody>
          </table>
        @endforeach
    </div>
    @else
    <h2 class="title" style="text-center font-family=serif">本日の投稿はありません</h2>
    @endif
{{ $contents->links() }}
@endsection

