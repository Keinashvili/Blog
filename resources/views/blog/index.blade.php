@extends('layouts.app')

@section('content')
        <div class="container mx-auto mb-0.5 flex justify-between items-center px-6">
            @if(count($posts))
                <div class="flex flex-wrap mt-14 ml-48">
                    <h1 class="text-black title-font font-medium text-4xl px-5 py-2.5 text-center mb-2 ">Newest Blogs!</h1>
                    <a href="/add" class="lg:ml-96 italic mt-2 inline-block text-green-400 hover:underline font-medium rounded-full text-xl px-3 py-3 mr-2 justify-end mb-2 ">Add</a>
                </div>
        </div>
        @endif
    <section class="text-gray-600 body-font overflow-hidden">
        @if(count($posts))
        <div class="container px-5 py-24 mx-auto">
            @foreach($posts as $post)
            <div class="lg:w-4/5 mx-auto mb-24 flex flex-wrap">
                <img alt="img" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="cover/{{ $post->cover }}">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2 class="mt-4 uppercase tracking-widest text-xs text-gray-600">{{ $post->created_at }}</h2>

                    <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{ $post->title }}</h1>
                    <div class="flex mb-4 h-5">
                    </div>
                    <p class="leading-relaxed description">{{ $post->body }}</p>
                    <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
                        <!-- Lines -->
                    </div>
                    <div class="flex">
                        <a href="/edit/{{ $post->id }}" class="text-white bg-yellow-400 hover:bg-yellow-600 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Edit</a>
                        <form action="/delete/{{ $post->id }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" onclick="return confirm('Are you sure?')"  class="text-white bg-red-600 hover:bg-red-800 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Delete</button>
                        </form>
                        <a href="/show/{{ $post->id }}" class="flex ml-auto text-white bg-indigo-500 border-0 px-5 py-2.5 text-center mr-2 mb-2 hover:bg-indigo-600 rounded">View More</a>
                    </div>
                </div>
            </div>

            @endforeach
            @else
                    <div class="flex flex-wrap mt-48 ml-48">
                        <h1 class="text-black title-font font-medium text-4xl px-5 py-2.5 text-center mb-2 ">No Blogs!</h1>
                        <a href="/add" class="lg:ml-96 italic mt-2 inline-block text-green-400 hover:underline font-medium rounded-full text-xl px-3 py-3 mr-2 justify-end mb-2 ">Add</a>
                    </div>
                <div class="h-48"></div>
                @endif
        </div>
    </section>

@endsection
