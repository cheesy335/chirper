<x-layout>
    <div class="w-[90%] lg:w-150 mt-5 flex justify-between shadow-sm p-5">
        <div>
            <h1 class="text-2xl ">{{ $user->name }} </h1>
            <h1 class="">{{ $user->email }} </h1>
        </div>
        <div class="profile-actions flex flex-col gap-1">
            <a href="/profile/{{ Auth::user()->id }}/edit" class="btn btn-outline">Edit Profile</a>
            <form action="/profile/{{ Auth::user()->id }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete Account" class="btn btn-error">
            </form>
        </div>
    </div>
    <div class="w-[90%] lg:w-150 mt-5 flex flex-col gap-5">
        @foreach ($posts as $post)
            <x-post :$post></x-post>
        @endforeach
    </div>
</x-layout>
