<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function register(){
        return view('auth/register');
    }

    public function registerSave(Request $request){
        Validator::make($request->all(), [
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'password'=>'required|confirmed',
            'address'=>'required'
        ])->validate();
    
        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'level'=>'Admin'
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful!');
    }

    public function login(){
        return view('auth/login');
    }

    public function loginAction(Request $request){
        Validator::make($request->all(), [
            'email'=>'required|email',
            'password'=>'required'
        ])->validate();

        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages ([
                'email' =>trans ('auth.failed')
            ]);
        }

        $request->session()->regenerate();
        return redirect()-> route('dashboard');
    }

    public function logout (Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function profile (){
        return view ('profile');

    }

    public function updateProfile(Request $request)
{
    $user = auth()->user();
    $user->update($request->all());

    return $this->getUsers(); // Redirigez vers la liste des utilisateurs après la mise à jour du profil
}


    public function getUsers()
{
    $users = User::all();
    return view('users.list', compact('users'));
}

public function index()
{
    $users = User::all();
    return view('users.list', compact('users'));
}

public function edit($id)
{
    $user = User::findOrFail($id);
    return view('profile', compact('user'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    $user->update($request->all());
    return redirect()->route('users.index')->with('success', 'User updated successfully');
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('users.index')->with('success', 'User deleted successfully');
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



public function showRegistrationForm(){
    return view('registerhome');
}

public function registerhome(Request $request){
    Validator::make($request->all(), [
        'fname'=>'required',
        'lname'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'password'=>'required|confirmed',
        'address'=>'required'
    ])->validate();

    User::create([
        'fname' => $request->fname,
        'lname' => $request->lname,
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
        'address' => $request->address,
        'level'=>'Reader'
    ]);

    return redirect()->route('loginhome')->with('success', 'Registration successful!');
}

public function showLoginForm(){
    return view('loginhome');
}

public function loginhome(Request $request){
    Validator::make($request->all(), [
        'email'=>'required|email',
        'password'=>'required'
    ])->validate();

    if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        throw ValidationException::withMessages ([
            'email' =>trans ('auth.failed')
        ]);
    }

    $request->session()->regenerate();
    return redirect()-> route('home');
}

public function logouthome (Request $request){
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    return redirect('/');
}


    
}
