@extends('layouts.app')

@section('content')
<div class="container">
    <p class="text-center">{{$post->author}}</p>
    <img class="text-center" src="{{$post->image}}" alt="">
    <br>
    <h1>{{$post->title}}</h1>
    <p>{{$post->content}}</p>                         
</div>   
     
@endsection