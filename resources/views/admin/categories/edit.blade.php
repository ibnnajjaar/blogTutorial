@extends('admin.categories.categories')

@section('PageSubTitle', 'Edit Category')

@section('content')

    {!! Form::open(['route' => ['admin.categories.update', 'category' => $category], 'method' => 'PATCH']) !!}
    @include('admin.categories._form')
    {!! Form::close() !!}

@endsection
