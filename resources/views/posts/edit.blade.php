<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Post</title>
</head>
<body>
    <form class="form-post" action="/posts/{{$post->id}}" method="post">
        <h2>Editar post</h2>
        {{-- <input type="hidden" name="_token" value={{csrf_token()}}> --}}
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="">Resumen</label>
            <textarea name="excerpt" id="" cols="30" rows="10">{{$post->excerpt}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Contenido</label>
            <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Actualizar</button>
        </div>
    </form>
    <a href="/posts/{{$post->id}}"><< Cancelar</a>
</body>
</html>