@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1 class="my-4">Статьи :: {{$articles->user->name}}
    </h1>

    <!-- Blog Post -->
    <div class="card mb-4">
        @foreach($posts as $post)
            <img class="card-img-top" src="{{$post->img}} " alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><a href="{{route('postsById', $post->id)}}">{{$post->headline}} </a></h2>
                <p class="card-text">{{$post->content}}</p>
                <a href="{{route('postsById', $post->id)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{$post->created_at}} by
                <a href="{{route('postsByUser', $articles->user->id)}}">{{$articles->user->name}}</a>
                <span>Category: </span>
                @foreach($articles->category as $category)
                    <a href="{{route('postsByTag', $category->key)}}"> #{{$category->title}} </a>

                @endforeach
            </div>
        @endforeach
    </div>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
        </li>
    </ul>
@endsection

