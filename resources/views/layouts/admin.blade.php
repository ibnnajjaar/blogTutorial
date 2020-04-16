@include('includes.admin.head')

@include('includes.admin.navbar')


<div class="wrapper">
    <div class="breadcrumbs-wrapper">
        <h4 class="breadcrumbs">@yield('PageTitle', 'Dashboard') {{ (Route::is('admin.dashboard.*')) ? '' : '\\' }} @yield('PageSubTitle')</h4>
        <div class="actions">
            @yield('actions')
        </div>
    </div>
    <div class="sidebar">
        @include('includes.admin.sidebar')
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.admin.footer')

