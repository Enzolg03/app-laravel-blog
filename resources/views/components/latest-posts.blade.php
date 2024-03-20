<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    <div>
        <div>
            <h3>Posts recientes</h3>
            <ul>
                @foreach ($posts as $post)
                    <li><a href="/posts/{{$post->id}}">{{$post->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>