@include('includes.web.head')

    <div class="personal-blog-wrapper">
        <a href="{{ route('admin.dashboard.index') }}" class="sign-in btn btn-sm btn-dark">Login</a>
        <div class="row">
            <div class="col">
                <h1 class="text-center mb-3">{{ env('APP_NAME') }}</h1>
            </div>
        </div>

        @include('includes.web.navigation')

        @include('includes.web.search')

        @yield('content')

        @include('includes.web.pagination')

    </div>

@include('includes.web.footer')
