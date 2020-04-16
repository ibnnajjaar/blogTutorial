@extends('admin.posts.posts')

@section('PageSubTitle', 'Create New')

@section('content')

    {!! Form::open(['route' => 'admin.posts.store']) !!}
    @include('admin.posts._form')
    {!! Form::close() !!}

@endsection
