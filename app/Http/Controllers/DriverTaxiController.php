<?php
// app/Http/Controllers/Auth/RegisteredDriverController.php

use App\Models\User;
use App\Models\DriverTaxi;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;

class RegisteredDriverController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.driver');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'status' => ['required', 'string'],
            'number_seats' => ['required', 'integer'],
            'image' => ['required', 'image'],
            'typ_veicl' => ['required', 'string'],
            'matricule' => ['required', 'string'],
            'method_payment' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Create a new driver_taxi record
        $driver_Taxi = driver_taxi::create([
            'User_id' => $user->id,
            'status' => $request->status,
            'number_seats' => $request->number_seats,
            'image' => $request->file('image')->store('images'), // Store the image in the 'images' directory (adjust as needed)
            'typ_veicl' => $request->typ_veicl,
            'matricule' => $request->matricule,
            'method_payment' => $request->method_payment,
            'description' => $request->description,
        ]);

        // Fire the Registered event
        event(new Registered($user));

        // Log in the registered user
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
