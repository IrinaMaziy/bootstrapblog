@extends('layouts.app')

@section('title', 'Services')
@section('content')
    <h1 class="my-4">Услуги</h1>
    @foreach($services as $service)
    <div class="card-body">
        <h2><a href="#">{{$service->name}}</a></h2>
        <p>{{$service->value}}</p>
    </div>
    @endforeach
    @endsection