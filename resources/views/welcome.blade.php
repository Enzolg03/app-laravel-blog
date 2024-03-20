<x-layout :title="'Bienvenidos'">
{{-- @extends('layouts.app')
@section('title', 'Bienvenidos - ')
@section('content') --}}
    <div class="container">
        <h1>Blog de Enzo</h1>
        @foreach ($posts as $post)
        <article>
            {{-- <p>{{$foo}}</p> --}}
            <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
            {{-- @if ($post->id>4)
                Post mayor a 4
            @else
                Post menor a 4
            @endif --}}
            @unless ($post->id>4)
                Post menor a 4
            @else
            Post mayor a 4
            @endunless
            <p>{{ $post->excerpt }}</p>
        </article>
        @endforeach
        
        <my-component></my-component>
    </div>
{{-- @endsection --}}
</x-layout>