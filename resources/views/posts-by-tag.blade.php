@extends('layouts.app')

@section('title', 'Post-by-tag')

@section('content')
    <h1 class="my-4">Посты в категории {{$category->title}}</h1>

    <!-- Blog Post -->
    <div class="card mb-4">
        @foreach($category->article as $article)
            <img class="card-img-top" src="{{$article->img}} " alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><a href="{{route('postsById', $article->id)}}">{{$article->headline}} </a></h2>
                <p class="card-text">{{$article->content}}</p>
                <a href="{{route('postsById', $article->id)}}" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
                Posted on {{$article->created_at}} by
                <a href="{{route('postsByUser', $article->user->id)}}">{{$article->user->name}}</a>

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

