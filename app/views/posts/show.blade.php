@extends('layouts.master')

@section('content')

<br>
<br>
<br>
<br>
<p>Index: {{ $post->id }}</p>
<p>Title: {{ $post->title }}</p>
<p>Post: {{ $post->body }}</p>
@stop
