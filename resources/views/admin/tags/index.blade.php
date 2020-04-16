@extends('admin.tags.tags')

@section('PageSubTitle', 'View All')

@section('content')

    <div class="card">
        @include('admin.tags._filter')
        @include('admin.tags._table')
    </div>

@endsection
