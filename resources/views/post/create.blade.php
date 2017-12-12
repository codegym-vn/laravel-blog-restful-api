<p>
    <a href="{{route('posts.list')}}">Post list</a>
</p>
<form action="{{route('posts.store')}}" method="post">
    {{csrf_field()}}
    <input name="title" type="text"/> <br/>
    <textarea name="content"></textarea><br/>
    <input type="submit" value="Create"/>
</form>