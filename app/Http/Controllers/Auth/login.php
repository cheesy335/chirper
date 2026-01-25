<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        Auth::attempt($credentials);

        if (! Auth::check()) {
            return back();
        }

        $request->session()->regenerate();

        return view('home', [
            'chirps' => Chirp::latest()->get(),
        ]);
    }
}
