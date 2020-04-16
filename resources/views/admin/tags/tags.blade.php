@extends('layouts.admin')

@section('SubTitle', 'Tags')
@section('PageTitle', 'Tags')

@section('actions')
    @if (! Route::is('admin.tags.index'))
        <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.tags.index') }}">View All</a>
    @endif
    @if (Route::is('admin.tags.show'))
        <a class="btn btn-sm btn-warning mr-2" href="{{ route('admin.tags.edit', ['tag' => $tag]) }}">Edit</a>
    @endif
    @if (Route::is('admin.tags.edit'))
        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.tags.show', ['tag' => $tag]) }}">View</a>
    @endif
    @if (! Route::is('admin.tags.create'))
        <a class="btn btn-sm btn-success" href="{{ route('admin.tags.create') }}">Add New</a>
    @endif
@endsection

