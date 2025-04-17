<h1>Posts</h1>
<a href="{{ route('posts.create') }}">Nieuwe post</a>
<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
            <a href="{{ route('posts.edit', $post) }}">✏️</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">🗑️</button>
            </form>
        </li>
    @endforeach
</ul>

