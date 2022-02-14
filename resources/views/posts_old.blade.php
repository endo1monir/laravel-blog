@extends('components/layout')
@section('section1')
<h1>Endo Posts</h1>
@endsection
@section('section2')
@foreach ($posts as $post) 
 <article class="{{$loop->even? 'texet-center' : ''}}">
        <h1><a href="/posts/{{$post->slug}}">{{ $post->title; }}</a></h1>
        <div>{{$post->excerpt;}}</div>
        <div>{!!$post->body;!!}</div>
    </article>
   By <a href="/author/{{$post->author->username}}">{{$post->author->name}}</a> <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
    @endforeach
@endsection