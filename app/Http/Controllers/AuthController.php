<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Providers\RouteServiceProvider;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'owner') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role == 'university') {
                return redirect()->intended('/internship/university/dashboard');
            } elseif ($user->role == 'school') {
                return redirect()->intended('/internship/school/dashboard');
            }
        }
        return view('auth.login');
    }   

    public function login(Request $request)
    {
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);
   
        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/admin/dashboard')
        //                 ->withSuccess('Signed in');
        // }
  
        // return redirect("login")->withSuccess('Login details are not valid');

        $kredensil = $request->only('username','password');

            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'Owner') {
                    $request->session()->regenerate();
                    return redirect()->intended('/admin/dashboard');
                } elseif ($user->role == 'University') {
                    $request->session()->regenerate();
                    return redirect()->intended('/internship/university/dashboard');
                } elseif ($user->role == 'School') {
                    $request->session()->regenerate();
                    return redirect()->intended('/internship/school/dashboard');
                }
                return redirect()->session()->regenerate();
            }

        return redirect('login')
                ->withInput()
                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }  
    
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('admin.dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('You are not allowed to access');
    // }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
