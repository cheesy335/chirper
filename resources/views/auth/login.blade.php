<x-layout>
    <form action="/login" method="POST" class="fieldset rounded-box w-xs p-4">
        @csrf
        <label class="fieldset">
            <span class="label">Email</span>
            <input type="email" name="email" placeholder="email@site.com" class="input input-primary validator"
                required />
            <span class="validator-hint hidden">Required</span>
        </label>

        <label class="fieldset">
            <span class="label">Password</span>
            <input type="password" name="password" placeholder="Password" class="input input-primary validator"
                required />
            <span class="validator-hint hidden">Required</span>
        </label>

        <button class="btn btn-primary mt-4" type="submit">Log In</button>
    </form>
</x-layout>
