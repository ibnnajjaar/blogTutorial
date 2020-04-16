@extends('admin.categories.categories')

@section('PageSubTitle', 'View All')

@section('content')

    <div class="card">
        @include('admin.categories._filter')
        @include('admin.categories._table')
    </div>

@endsection
