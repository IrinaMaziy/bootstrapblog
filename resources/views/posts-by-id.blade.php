@extends('layouts.app')

@section('title', $posts->headline)

@section('content')
    {{--<h1 class="my-4">  заголовок  </h1>--}}

    <!-- Blog Post -->
    <div class="card mb-4">
            <img class="card-img-top" src="{{$posts->img}} " alt="Card image cap">
            <div class="card-body">
                <h2 class="card-title"><a href="#">{{$posts->headline}} </a></h2>
                <p class="card-text">{{$posts->content}}</p>
                {{--<a href="#" class="btn btn-primary">Read More &rarr;</a>--}}
            </div>
            <div class="card-footer text-muted">
                Posted on {{$posts->created_at}} by
                <a href="{{route('postsByUser', $posts->user->id)}}">{{$posts->user->name}}</a>
                <span>Category: </span>
                @foreach($posts->category as $category)
                    <a href="{{route('postsByTag', $category->key)}}"> #{{$category->title}} </a>

                @endforeach
            </div>
    </div>
@endsection

