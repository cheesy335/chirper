@props(['chirps'])
<x-layout>
    <div class="w-[90%] lg:w-150 text-center">
        @auth
            <h1 class="text-3xl text-left">Hello {{ Auth::user()->name }} </h1>
        @else
            <h1 class="text-3xl text-left">Welcome to Chirper.</h1>
        @endauth
    </div>
    <div class="w-[90%] lg:w-150">
        <x-create-post></x-create-post>
    </div>
    <div class="w-[90%] lg:w-150 mt-5 flex flex-col gap-5">
        @foreach ($posts as $post)
            <x-post :$post></x-post>
        @endforeach
    </div>
</x-layout>
