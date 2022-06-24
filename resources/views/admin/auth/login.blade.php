@extends('layout.login')

@section('title', 'Blog | Login')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <div class="form-signin w-100 m-auto mt-5" style="max-width: 330px; padding: 15px;">
                        <form method="POST" action="{{ route('login_process') }}">
                            @csrf
                            <h1 class="h3 mb-3 fw-normal">Sign in</h1>

                            <div class="form-floating mb-3">
                                <input name="email" type="email" class="form-control @error('email') border-danger @enderror" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>

                                @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input name="password" type="password" class="form-control @error('password') border-danger @enderror" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>

                                @error('password')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
