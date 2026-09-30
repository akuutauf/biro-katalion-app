<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function do_login(Request $request)
    {
        // validasi input
        $credentials = $request->validate([
            'username' => ['required', 'string', 'max:50'],
            'password' => ['required', 'string'],
        ]);

        // Proses autentikasi
        if (Auth::attempt([
            'name' => $credentials['username'],
            'password' => $credentials['password'],
        ])) {
            // Regenerasi session setelah berhasil login
            $request->session()->regenerate();

            return redirect()
                ->intended(route('landing.page'))
                ->with('success', 'Login berhasil. Selamat datang!');
        }

        // Jika username atau password salah
        return back()->withErrors([
            'username' => 'Username atau password yang Anda masukkan salah.',
        ])->onlyInput('username');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function do_register(Request $request)
    {
        // validasi input
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'username' => ['required', 'string', 'max:50', 'unique:users,name'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password_confirmation' => ['required'],
        ]);

        // membuat user baru
        $user = User::create([
            'name' => $credentials['username'],
            'email' => $credentials['email'],
            'password' =>  Hash::make($credentials['password']),
        ])->assignRole('client');

        // Login otomatis setelah register
        Auth::login($user);

        // Redirect setelah berhasil
        return redirect()->route('landing.page')->with('success', 'Registrasi berhasil. Selamat datang!');
    }

    public function do_logout()
    {
        // menghapus sesi auth saat ini
        Session::flush();

        Auth::logout();

        return redirect()->route('landing.page');
    }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
