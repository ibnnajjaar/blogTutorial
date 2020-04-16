@extends('admin.dashboard.dashboard')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card border-light shadow-sm mb-3">
                <div class="card-body text-info">
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text">There are total {{ $posts_count ?? '0' }} posts.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-light shadow-sm mb-3">
                <div class="card-body text-info">
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">There are total {{ $categories_count ?? '0' }} categories.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card border-light shadow-sm mb-3">
                <div class="card-body text-info">
                    <h5 class="card-title">Tags</h5>
                    <p class="card-text">There are total {{ $tags_count ?? '0' }} tags.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
