@foreach( $posts as $post )
<tr>
    <th scope="row">{{ $post->id }}</th>
    <td>{{ $post->title }}</td>
    <td>{{ optional($post->category)->name }}</td>
    <td>{{ $post->created_at->format('jS M Y') }}</td>
    <td>
        {!! Form::open(['action' => ['Admin\PostController@destroy', $post], 'method' => 'DELETE']) !!}
        <a class="action-icons" href="{{ action('Admin\PostController@show', $post) }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M.2 10a11 11 0 0 1 19.6 0A11 11 0 0 1 .2 10zm9.8 4a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm0-2a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"/></svg>
        </a>
        <a class="action-icons" href="{{ action('Admin\PostController@edit', $post) }}">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2 4v14h14v-6l2-2v10H0V2h10L8 4H2zm10.3-.3l4 4L8 16H4v-4l8.3-8.3zm1.4-1.4L16 0l4 4-2.3 2.3-4-4z"/></svg>
        </a>
        <a class="action-icons" onclick="$(this).closest('form').submit()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M6 2l2-2h4l2 2h4v2H2V2h4zM3 6h14l-1 14H4L3 6zm5 2v10h1V8H8zm3 0v10h1V8h-1z"/></svg>
        </a>
        {!! Form::close() !!}
    </td>
</tr>
@endforeach
