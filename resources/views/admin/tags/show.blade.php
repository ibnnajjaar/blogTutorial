@extends('admin.tags.tags')

@section('PageSubTitle', 'View')

@section('content')

    <div class="card">
        <div class="card-header">
            Tag ID: #{{ $tag->id }}
        </div>
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $tag->name }}</dd>

                <dt class="col-sm-3">Slug</dt>
                <dd class="col-sm-9">{{ $tag->slug }}</dd>
            </dl>
        </div>
    </div>

@endsection
