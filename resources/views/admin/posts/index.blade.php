@extends('layout.admin')

@section('title', 'Posts')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="content__head-title mb-4">Posts</h1>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">Add post</a>
                </div>

                <table class="table table-hover mb-2">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>
                                <a href="javascript:void(0);" class="content__burger" id="dropdownContent{{$post->id}}" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownContent{{$post->id}}">
                                    <li><a class="dropdown-item" href="{{ route('posts.edit', $post->id) }}">Edit post</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure?')">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="dropdown-item dropdown-item--danger">Delete</button>
                                        </form>
                                    </li>
                                </ul>
                            </td>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
