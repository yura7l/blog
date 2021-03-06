<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <p class="col-md-4 mb-0 text-muted">© 2022 Blog, Inc</p>

        <ul class="nav col-md-4 justify-content-end">
            @if(Auth::check())
                <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link px-2 text-muted">Admin panel</a></li>
            @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link px-2 text-muted">Sign In</a></li>
            @endif
        </ul>
    </footer>
</div>
