<aside class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white bg-dark h-100 justify-content-between">
    <div>
        <a href="{{ route('posts-list') }}" class="sidebar__logo">
            Blog
        </a>
        <ul class="sidebar__nav nav nav-pills">
            <li class="sidebar__nav-item w-100">
                <a href="{{ route('posts.index') }}" class="d-flex align-items-center gap-1 sidebar__nav-link nav-link {{ request()->segment(2) == 'posts' ? 'active' : '' }}">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                        <path d="M19.875 3H4.125C2.953 3 2 3.897 2 5v14c0 1.103.953 2 2.125 2h15.75C21.047 21 22 20.103 22 19V5c0-1.103-.953-2-2.125-2zm0 16H4.125c-.057 0-.096-.016-.113-.016-.007 0-.011.002-.012.008L3.988 5.046c.007-.01.052-.046.137-.046h15.75c.079.001.122.028.125.008l.012 13.946c-.007.01-.052.046-.137.046z"/>
                        <path d="M6 7h6v6H6zm7 8H6v2h12v-2h-4zm1-4h4v2h-4zm0-4h4v2h-4z"/>
                    </svg>
                    Posts
                </a>
            </li>
        </ul>
    </div>
    <div>
        <hr>
        <div class="sidebar__copy">Built with &#10084;</div>
    </div>
</aside>
