@extends('admin.tags.tags')

@section('PageSubTitle', 'Edit Tag')

@section('content')

    {!! Form::open(['route' => ['admin.tags.update', 'tag' => $tag], 'method' => 'PATCH']) !!}
    @include('admin.tags._form')
    {!! Form::close() !!}

@endsection
