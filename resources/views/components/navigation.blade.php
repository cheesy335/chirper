<header class="w-full h-12.5 flex justify-between items-center p-10">
    <div class="logo">
        <a href="/" class="font-bold text-2xl">Chirper</a>
    </div>

    <div>
        @auth
            <a href="/profile">{{ Auth::user()->name }}</a>
        @endauth
        @guest
            <a href="/login" class="btn btn-primary btn-outline">Sign In</a>
            <a href="/register" class="btn btn-primary">Sign Up</a>
        @endguest
    </div>
</header>
