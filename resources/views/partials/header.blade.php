<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="{{ route('posts-list') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <span class="fs-4">Blog</span>
        </a>

        <ul class="nav nav-pills">
            @if(Auth::check())
                <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">Admin panel</a></li>
            @else
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Sign In</a></li>
            @endif
        </ul>
    </header>
</div>
