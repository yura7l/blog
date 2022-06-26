@extends('layout.admin')

@section('title', isset($post) ? "Edit post #{$post->id}" : "Add new post")

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pb-5">
                <h1 class="mb-4">{{ isset($post) ? "Edit post #{$post->id}" : "Add new post" }}</h1>

                <div class="container">
                    <form method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" enctype="multipart/form-data">
                        @csrf

                        @if(isset($post))
                            @method('PUT')
                        @endif

                        @if(isset($post))
                            <div class="row mb-3">
                                <label for="created_at" class="col-lg-4 col-form-label text-lg-end">Created at</label>
                                <div class="col-lg-8">
                                    <div class="align-items-center d-flex fw-bolder h-100">{{ $post->created_at }}</div>
                                </div>
                            </div>
                        @endif

                        <div class="row mb-3">
                            <label for="title" class="col-lg-4 col-form-label text-lg-end">Title</label>
                            <div class="col-lg-8">
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ isset($post) ? $post->title : "" }}">

                                @error('title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-lg-4 col-form-label text-lg-end">Image</label>
                            <div class="col-lg-8">
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">

                                @error('image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                                @if(isset($post) && $post->image)
                                    <div class="card mt-3" style="width: 18rem;">
                                        <img src="/uploads/{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="text" class="col-lg-4 col-form-label text-lg-end">Text</label>
                            <div class="col-lg-8">
                                <textarea name="text" id="text" class="form-control @error('text') is-invalid @enderror" cols="30" rows="15">{{ isset($post) ? $post->text : "" }}</textarea>

                                @error('text')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="d-flex align-items-center justify-content-between mt-4 pt-4 border-top">
                            <a href="{{ route('posts.index') }}" class="btn btn-light">Back to list</a>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
