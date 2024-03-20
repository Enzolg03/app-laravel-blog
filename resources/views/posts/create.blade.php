<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Post</title>
</head>
<body>
    <form class="form-post" action="/posts" method="post">
        <h2>Crear post</h2>
        {{-- <input type="hidden" name="_token" value={{csrf_token()}}> --}}
        @csrf
        <div class="form-group">
            <label for="">Título</label>
            <input type="text" name="title">
        </div>
        <div class="form-group">
            <label for="">Resumen</label>
            <textarea name="excerpt" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Contenido</label>
            <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn">Guardar</button>
        </div>
    </form>
</body>
</html>