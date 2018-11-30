@extends('layouts.app')

@section('title', 'Contacts')

@section('content')
    <h1 class="my-4">Контакты</h1>
    <div class="my-4">
        @foreach($contacts as $contact)
        <p> <b>{{$contact->type}}</b> :  {{$contact->value}} <br> </p>
       @endforeach
    </div>
    @endsection
