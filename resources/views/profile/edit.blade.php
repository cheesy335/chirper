<x-layout>
    <form action="/profile/{{ $user->id }}" method="POST" class="fieldset rounded-box w-xs p-4">
        @csrf
        @method('PATCH')
        <h1 class="text-2xl font-bold">Edit Profile</h1>
        <label class="fieldset">
            <span class="label">Full Name</span>
            <input type="name" name="name" placeholder="Edward Kenway" value="{{ $user->name }}" class="input input-primary validator"
                required />
            <span class="validator-hint hidden">Required</span>
        </label>
        <label class="fieldset">
            <span class="label">Email</span>
            <input type="email" name="email" placeholder="email@site.com" value="{{ $user->email }}" class="input input-primary validator"
                required />
            <span class="validator-hint hidden">Required</span>
        </label>

        <button class="btn btn-primary mt-4" type="submit">Update</button>
    </form>
</x-layout>
