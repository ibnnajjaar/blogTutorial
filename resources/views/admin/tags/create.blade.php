@extends('admin.tags.tags')

@section('PageSubTitle', 'Create New')

@section('content')

    {!! Form::open(['route' => 'admin.tags.store']) !!}
    @include('admin.tags._form')
    {!! Form::close() !!}

@endsection
