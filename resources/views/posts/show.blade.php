<x-layout :title="$post->title">
<div class="container">
        <article>
            <h1>{{$post->title}}</h1>
            <p>{{$post->content}}</p>
        </article>
        <a href="/"><< Inicio</a>
        <a href="/posts/{{$post->id}}/edit"><< Editar</a>
        <form action="/posts/{{$post->id}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn" onclick="return confirm('Estás seguro de borrar este post')">Eliminar</button>
        </form>
        <h4>Comenatrios</h4>
        @foreach($comments as $comment)
        <div>{{ $comment->content }}</div>
        <small style="color: grey;">{{ $comment->name }}</small>
        <hr>
        @endforeach
    </div>
</x-layout>