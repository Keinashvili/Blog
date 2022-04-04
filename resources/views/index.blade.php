@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10 ">
    <div class="w-full sm:px-6">
        <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Welcome to my blog website
                        <br class="hidden lg:inline-block">
                    </h1>
                    <p class="mb-8 leading-relaxed">
                        The website is educational I built it using laravel and Tailwindcss.
                        <br>
                        - Would you like to write a blog?
                        <br>
                        @guest
                        - Click the button below to register.
                        @else
                        - Click the button below to see blogs.
                        @endguest
                    </p>
                        @guest
                    <div class="flex justify-center">
                        <a href="/register" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                            Join the website!
                        </a>
                    </div>
                    <p class="text-gray-400 mt-3 hover:underline"><a href="/login">
                            Already a user? click here to sign in
                        </a></p>
                @else
                    <div class="flex justify-center">
                        <a href="/blog" class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                            View blogs!
                        </a>
                    </div>
                @endguest
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="{{ asset('img/istockphoto-1067437182-170667a.jpg') }}">
                </div>
            </div>
        </section>
    </div>
</main>
@endsection
