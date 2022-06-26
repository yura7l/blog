<div class="container">
    <div class="row">
        @if($posts)
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-3">
                        @if($post->images)
                            <img src="" class="card-img-top" alt="">
                        @endif
                        <div class="card-body">
                            <a href="{{ route('post', $post->id) }}" class="card-title">{{ $post->title }}</a>
                            <p class="card-text">{{ mb_strimwidth($post->text, 0, 100, "...") }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning">There's no news yet. We're working on this.</div>
        @endif
    </div>
</div>
