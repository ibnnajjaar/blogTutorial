@extends('admin.posts.posts')

@section('PageSubTitle', 'Edit Post')

@section('content')

    {!! Form::open(['route' => ['admin.posts.update', 'post' => $post], 'method' => 'PATCH']) !!}
    @include('admin.posts._form')
    {!! Form::close() !!}

@endsection
