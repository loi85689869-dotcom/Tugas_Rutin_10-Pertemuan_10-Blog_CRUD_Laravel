@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')

<h1>Edit Post</h1>

<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul:</label>
    <br>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Isi:</label>
    <br>
    <textarea name="content">{{ old('content', $post->content) }}</textarea>

    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Simpan Perubahan</button>
</form>

<br>

<a href="{{ route('posts.index') }}">Kembali</a>

@endsection