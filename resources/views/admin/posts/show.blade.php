@extends('admin.posts.posts')

@section('PageSubTitle', 'View')

@section('content')

    <div class="card">
        <div class="card-header">
            Post ID: #{{ $post->id }}
        </div>
        <div class="card-body">
            <span class="badge badge-info py-2 px-3 mb-2p">{{ optional($post->category)->name }}</span>
            <h2>{{ $post->title }}</h2>
            <div class="post-content my-4">{!! $post->content !!}</div>

        </div>
    </div>

@endsection
