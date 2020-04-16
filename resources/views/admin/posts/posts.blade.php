@extends('layouts.admin')

@section('SubTitle', 'Posts')
@section('PageTitle', 'Posts')

@section('actions')
    @if (! Route::is('admin.posts.index'))
        <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.posts.index') }}">View All</a>
    @endif
    @if (Route::is('admin.posts.show'))
        <a class="btn btn-sm btn-warning mr-2" href="{{ route('admin.posts.edit', ['post' => $post]) }}">Edit</a>
    @endif
    @if (Route::is('admin.posts.edit'))
        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.posts.show', ['post' => $post]) }}">View</a>
    @endif
    @if (! Route::is('admin.posts.create'))
        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.posts.create') }}">Add New</a>
    @endif
@endsection

