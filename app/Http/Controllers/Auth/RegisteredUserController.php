<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'role' => ['required', 'in:user,TOKO,admin'],
        'address' => ($request->role == 'user') ? [] : ['required', 'string', 'max:255'],
        'image' => ($request->role == 'user') ? [] : ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    ]);

    $imagePath = null;

    if ($request->hasFile('image') && $request->role !== 'user') {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);

        $imagePath = $request->file('image')->store('uploads', 'public');
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'address' => ($request->role == 'user') ? null : $request->address,
        'password' => Hash::make($request->password),
        'role' => $request->role,
        'image' => ($request->role == 'user') ? null : $imagePath,
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::HOME);
}

    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'role' => ['required', 'in:user,TOKO,admin'],
    //         'address' => ['required', 'string', 'max:255'],
    //         'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    //     ]);
    //     $imagePath = null;

    //     if ($request->hasFile('image')) {
    //         $request->validate([
    //             'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    //         ]);
        
    //         $imagePath = $request->file('image')->store('uploads', 'public');
    //     }
    

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'address' => $request->address,
    //         'password' => Hash::make($request->password),
    //         'role' => $request->role,
    //         'image' => $imagePath,
    //     ]);

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOME);
    // }
}
