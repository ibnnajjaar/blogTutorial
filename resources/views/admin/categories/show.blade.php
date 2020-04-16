@extends('admin.categories.categories')

@section('PageSubTitle', 'View')

@section('content')
    <div class="card">
        <div class="card-header">
            Category ID: #{{ $category->id }}
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $category->name }}</dd>

                <dt class="col-sm-3">Slug</dt>
                <dd class="col-sm-9">{{ $category->slug }}</dd>
            </dl>
        </div>
    </div>
@endsection
