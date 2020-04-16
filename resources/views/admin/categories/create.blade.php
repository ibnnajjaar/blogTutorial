@extends('admin.categories.categories')

@section('PageSubTitle', 'Create New')

@section('content')

    {!! Form::open(['route' => 'admin.categories.store']) !!}
    @include('admin.categories._form')
    {!! Form::close() !!}

@endsection
