@extends('layouts.app')

@section('title', 'Tambah Post')

@section('content')

<h1>Tambah Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <label>Judul:</label>
    <br>
    <input type="text" name="title" value="{{ old('title') }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <label>Isi:</label>
    <br>
    <textarea name="content">{{ old('content') }}</textarea>

    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <br><br>

    <button type="submit">Simpan</button>
</form>

<br>

<a href="{{ route('posts.index') }}">Kembali</a>

@endsection