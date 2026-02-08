<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required', 'min:6'],
        ]);

        // dd($credentials);
        $user = User::create($credentials);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $user = Auth::user();

        $posts = Post::where('user_id', $user->id)->latest()->get();

        return view('profile.show', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $credentials = $request->validate([
            'name' => ['required'],
            'email' => ['required'],
        ]);

        if ($user->name === $credentials['name'] && $user->email === $credentials['email']) {
            return redirect('/profile');
        }

        $user->update([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
        ]);

        return redirect('/profile');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/');
    }
}
