@extends('layout.admin')

@section('title', "Post #{$post->id}")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mb-4">{{ "Post #{$post->id}" }}</h1>

                <div class="container">
                    <form method="POST" action="{{ route('posts.update', $post->id) }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="created_at" class="col-lg-4 col-form-label text-lg-end">Created at</label>
                            <div class="col-lg-8">
                                <div class="align-items-center d-flex fw-bolder h-100">{{ $post->created_at }}</div>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="title" class="col-lg-4 col-form-label text-lg-end">Title</label>
                            <div class="col-lg-8">
                                <input type="text" name="title" class="form-control" id="title" value="{{ $post->title }}">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="images" class="col-lg-4 col-form-label text-lg-end">Image</label>
                            <div class="col-lg-8">
                                <input type="file" name="images[]" class="form-control">
                            </div>
                            @if($post->images)
                                <div class="card" style="width: 18rem;">
                                    <img src="{{ $post->images }}" class="card-img-top" alt="{{ $post->title }}">
                                </div>
                            @endif
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-lg-4 col-form-label text-lg-end">Text</label>
                            <div class="col-lg-8">
                                <textarea name="text" id="text" class="form-control" cols="30" rows="15">{{ $post->text }}</textarea>
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4 pt-4 border-top">
                            <a href="{{ route('posts.index') }}" class="btn btn-light">Back to list</a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
