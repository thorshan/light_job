<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function index(){
        return view("users.dashboard");
    }

    // Register form
    public function create(){
        return view("register");
    }

    // Create new user
    public function store(Request $request){
        $formData = $request->validate([
            "name"=> 'required | min:3',
            'email'=> ['required', 'email', Rule::unique('users', 'email')],
            'password'=> 'required | min:6',
        ]);

        $user = new User();
        $user->name = $formData['name'];
        $user->email = $formData['email'];
        $user->password = bcrypt($formData['password']);

        $user->save();

        auth()->login($user);

        return redirect()->route('dashboard')->with('success','User created successfully');
    }

    // Logout user
    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('listings')->with('success','User logged out successfully');
    }

    // Login form
    public function login(){
        return view("login");
    }


    // Authenticate user
    public function authenticate(Request $request){
        $formData = $request->validate([
            "name"=> 'required',
            'password'=> 'required',
        ]);

        if(auth()->attempt($formData)){
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success','Logged in successfully');
        }else {
            return back()->withErrors(['email' => 'Invalid credentails'])->onlyInput('email');
        }
    }
}