<header class="w-full h-12.5 flex justify-between items-center p-10">
    <div class="logo">
        <a href="/" class="font-bold text-2xl">Chirper</a>
    </div>

    <div>
        @auth
            <div class="flex items-center">
                <a href="/profile" class="btn btn-ghost">Profile</a>
                <form action="/logout" method="post">
                    @csrf
                    <input type="submit" value="Logout" class="btn btn-error btn-soft">
                </form>
            </div>
        @endauth

        @guest
            <a href="/login" class="btn btn-primary btn-outline">Sign In</a>
            <a href="/register" class="btn btn-primary">Sign Up</a>
        @endguest
    </div>
</header>
