@section('title', 'Post')

<div class="container">
    <div class="row">
        <h1>{{ $post->title }}</h1>
        <div class="col-12">
            @if($post->image)
                <div class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/uploads/{{ $post->image }}" class="d-block w-100" alt="{{ $post->title }}">
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="post">
            {{ $post->text }}
        </div>
    </div>
</div>
