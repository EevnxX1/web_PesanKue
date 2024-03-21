<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.login');
    }

    public function authenticate(Request $request)
    {
       $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        $data = User::where('email', $email)->first();
        if(!$data) {
            return back()->with('loginError', 'Gmail yang anda masukkan salah!');
        } 
        if(password_verify($password, $data->password)) {
            Auth::login($data);
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }
        return back()->with('loginError', 'Password yang anda masukkan salah!');
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        return redirect('/login');
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
