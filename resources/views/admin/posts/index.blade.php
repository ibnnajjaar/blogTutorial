@extends('admin.posts.posts')

@section('PageSubTitle', 'View All')

@section('content')

    <div class="card">
        @include('admin.posts._filter')
        @include('admin.posts._table')
    </div>

@endsection
