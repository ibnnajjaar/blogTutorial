
<div class="sidebar-nav">
    <a class="sidebar-nav-link {{ (Route::currentRouteName() == 'admin.dashboard.index') ? 'active' : '' }}"
       href="{{ route('admin.dashboard.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3zm2 2v12h16V5H2z"/></svg>
        Home
    </a>
    <a class="sidebar-nav-link {{ Route::is('admin.posts.*') ? 'active' : '' }}"
       href="{{ route('admin.posts.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M3.33 8L10 12l10-6-10-6L0 6h10v2H3.33zM0 8v8l2-2.22V9.2L0 8zm10 12l-5-3-2-1.2v-6l7 4.2 7-4.2v6L10 20z"/></svg>
        Posts
    </a>
    <a class="sidebar-nav-link {{ Route::is('admin.categories.*') ? 'active' : '' }}"
       href="{{ route('admin.categories.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 1l10 6-10 6L0 7l10-6zm6.67 10L20 13l-10 6-10-6 3.33-2L10 15l6.67-4z"/></svg>
        Categories
    </a>
    <a class="sidebar-nav-link  {{ Route::is('admin.tags.*') ? 'active' : '' }}"
       href="{{ route('admin.tags.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 10V2l2-2h8l10 10-10 10L0 10zm4.5-4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>
        Tags
    </a>
</div>
