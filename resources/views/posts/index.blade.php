@extends('layouts.app')

@section('title', 'Daftar Post')

@section('content')

<h1>Daftar Post</h1>

<x-alert>
    {{ session('success') }}
</x-alert>

<a href="{{ route('posts.create') }}">Tambah Post</a>

<hr>

@foreach ($posts as $post)

    <x-card :post="$post">

        <a href="{{ route('posts.show', $post) }}">Lihat Detail</a>
        <a href="{{ route('posts.edit', $post) }}">Edit</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')

            <button type="submit">Hapus</button>
        </form>

    </x-card>

    <hr>

@endforeach

{{ $posts->links() }}

@endsection