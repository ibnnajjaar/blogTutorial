@extends('layouts.admin')

@section('SubTitle', 'Categories')
@section('PageTitle', 'Categories')

@section('actions')
    @if (! Route::is('admin.categories.index'))
        <a class="btn btn-sm btn-primary mr-2" href="{{ route('admin.categories.index') }}">View All</a>
    @endif
    @if (Route::is('admin.categories.show'))
        <a class="btn btn-sm btn-warning mr-2" href="{{ route('admin.categories.edit', ['category' => $category]) }}">Edit</a>
    @endif
    @if (Route::is('admin.categories.edit'))
        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.categories.show', ['category' => $category]) }}">View</a>
    @endif
    @if (! Route::is('admin.categories.create'))
        <a class="btn btn-sm btn-success" href="{{ route('admin.categories.create') }}">Add New</a>
    @endif
@endsection

