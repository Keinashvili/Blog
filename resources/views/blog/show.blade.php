@extends('layouts.app')

@section('content')
    <div class="relative h-96" >
        <img src="/cover/{{ $posts->cover }}" class="w-full h-full object-cover">
    </div>
    <div class="max-w-4xl mx-auto mt-24 bg-white py-12 px-12 lg:px-24 -mt-32 relative z-10">
        <h2 class="mt-4 uppercase tracking-widest text-xs text-gray-600">{{ $posts->created_at }}</h2>
        <h1 class="font-display text-2xl md:text-3xl text-gray-900 mt-4">{{ $posts->title }}</h1>
        <form action="/delete/{{ $posts->id }}" method="post" class="mt-3">
            @csrf
            @method('delete')
            <a href="/blog" class="text-white bg-green-400 hover:bg-green-600 font-medium rounded-full text-sm px-4 py-2 text-center mr-2 mb-2 ">Back</a>
            <a href="/edit/{{ $posts->id }}" class="text-white bg-yellow-400 hover:bg-yellow-600 font-medium rounded-full text-sm px-4 py-2 text-center mr-2 mb-2 ">Edit</a>

            <button type="submit" onclick="return confirm('Are you sure?')"  class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Delete</button>

        </form>
        <div class="prose prose-sm sm:prose lg:prose-lg mt-6">
            <p class="mb-8 leading-relaxed p-2">
                {{ $posts->body }}
            </p>
        </div>
    </div>
@endsection
