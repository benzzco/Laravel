@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">List of Posts</h1>
        <ul class="space-y-2">
            @foreach ($posts as $post)
                <li class="p-4 border rounded shadow">
                    <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                    <p>{{ $post->content }}</p>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
