@extends('layouts.master')

@section('content')
<br>
<br>
<br>
<br>
@foreach ($posts as $post)
    <p>Title: {{ $post->title }}</p>
    <p>Post: {{ $post->body }}</p>
@endforeach

@stop
