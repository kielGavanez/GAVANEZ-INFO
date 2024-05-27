<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function register(){
        return view('register');
    }

    public function store(Request $request)
    {
        $field = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email|min:3',
            'password' => 'required|min:3'
        ]);
        
        User::create($field);

        $users = User::all();
        return redirect()->route('login');
    }

    public function login() {
        return view('login');
    }

    public function loginProcess(Request $request) {
        $field = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($field)) {
            return redirect()->route('index');  
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

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
