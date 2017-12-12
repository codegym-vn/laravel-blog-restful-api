<p>
    <a href="{{route('posts.create')}}">Create post</a>
</p>
<ul>
    @foreach($posts as $post)
        <li>{{$post->title}}</li>
    @endforeach
</ul>