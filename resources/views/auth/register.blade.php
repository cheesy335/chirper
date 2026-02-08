<x-layout>
    <form action="/register" method="POST" class="fieldset rounded-box w-xs p-4">
        @csrf
        <h1 class="text-2xl font-bold">Create an account</h1>
        <label class="fieldset">
            <span class="label">Full Name</span>
            <input type="name" name="name" placeholder="Edward Kenway" class="input input-primary validator" required />
            <span class="validator-hint hidden">Required</span>
        </label>

        <label class="fieldset">
            <span class="label">Email</span>
            <input type="email" name="email" placeholder="email@site.com" class="input input-primary validator" required />
            <span class="validator-hint hidden">Required</span>
        </label>

        <label class="fieldset">
            <span class="label">Password</span>
            <input type="password" name="password" placeholder="Password" class="input input-primary validator" required />
            <span class="validator-hint hidden">Required</span>
        </label>

        <button class="btn btn-primary mt-4" type="submit">Sign Up</button>
    </form>
</x-layout>
