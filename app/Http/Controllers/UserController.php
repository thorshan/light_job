<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
<<<<<<< HEAD
    public function index(){
        $listings = Listing::latest()->get();
        return view("users.dashboard", compact("listings"));
=======
    public function index()
    {
        $all = Listing::count();
        $startDate = Carbon::now()->subDays(1);
        $activeListingsCount = Listing::where('created_at', '>=', $startDate)->count();
        $expireListingsCount = Listing::where('created_at','<=' , $startDate)->count();
        $listings = Listing::latest()->get();
        $output['listings'] = $listings;
        $output['all'] = $all;
        $output['active'] = $activeListingsCount;
        $output['expire'] = $expireListingsCount;
        return view("users.dashboard", $output);
>>>>>>> 4cef8579af27648008ebe5dfa329fd8cd09d9c91
    }

    // Register form
    public function create()
    {
        return view("register");
    }

    // Create new user
    public function store(Request $request)
    {
        $formData = $request->validate([
            "name" => 'required | min:3',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required | min:6',
        ]);

        $user = new User();
        $user->name = $formData['name'];
        $user->email = $formData['email'];
        $user->password = bcrypt($formData['password']);

        $user->save();

        auth()->login($user);

        return redirect()->route('dashboard')->with('success', 'User created successfully');
    }

    // Logout user
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return redirect()->route('listings')->with('success', 'User logged out successfully');
    }

    // Login form
    public function login()
    {
        return view("login");
    }


    // Authenticate user
    public function authenticate(Request $request)
    {
        $formData = $request->validate([
            "name" => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($formData)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard')->with('success', 'Logged in successfully');
        } else {
            return back()->withErrors(['email' => 'Invalid credentails'])->onlyInput('email');
        }
    }
}
