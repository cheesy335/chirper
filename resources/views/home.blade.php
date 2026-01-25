@props(['chirps'])
<x-layout>
    <div class="w-[90%] lg:w-150 text-center">
        <h1 class="text-3xl font-semibold">Welcome to Chirper</h1>
    </div>
    <div class="w-[90%] lg:w-150 mt-5">
        <x-create-chirp></x-create-chirp>
    </div>
    <div class="w-[90%] lg:w-150 mt-5 flex flex-col gap-5">
        @foreach ($chirps as $chirp)
            <x-chirp :$chirp></x-chirp>
        @endforeach
    </div>
</x-layout>
