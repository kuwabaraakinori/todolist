@if (count(contents>0))
<div class="container">
    @foreach ($contents as $content)
    <h2 class="title">本日の投稿</h2>
    <div class="card-group">
        <div class="card">
            <h2 class="card-title">{{ $content->name }}</h2>
            <p class="card-text">{{ $content->content }}</p>
            <span class="text-muted">{{ $content->created_at }}</span>
        </div>
    </div>
    @endforeach
</div>
@endif
@endsection
