
<div class="row">
    <div class="col">
        <div class="mb-4 text-center">
            <a href="{{ route('home') }}" class="blog-nav px-2">{{ 'Home' }}</a>
            @foreach ($categories as $category)
                <a href="{{ route('category', ['category' => $category])  }}" class="blog-nav px-2">{{ $category->name }}</a>
            @endforeach
        </div>
    </div>
</div>
