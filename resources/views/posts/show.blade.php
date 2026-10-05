@extends('layouts.app')

@section('title', 'Detail Post')

@section('content')

<h1>{{ $post->title }}</h1>

<p>{{ $post->content }}</p>

<hr>

<a href="{{ route('posts.index') }}">Kembali ke Daftar Post</a>

@endsection