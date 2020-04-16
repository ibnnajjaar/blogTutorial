@extends('layouts.web')
@section('content')
    <div class="row">
        <div class="col">
            @foreach ($posts  as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h2>{{ $post->title }}</h2>
                        <div class="content mb-4">
                            {!! $post->excerpt !!}
                        </div>
                        <a class="btn btn-sm btn-dark" href="#">Read more</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
