@extends('template')

@section('content')

    @foreach ($num_posts as $post)
        <p>
            <strong>{{ $post->id }}</strong>
            <a href="{{route('post', $post->slug)}}">
                {{ $post->title }}
            </a>
            <br>
            <span>{{ $post->user->name }}</span>//obtenemos el valor aqui
        //Se puede observar que hay una relacion entre post y user pero laravel 
				//aun no la conoce
				</p>
    @endforeach

    {{$num_posts->links()}}

@endsection