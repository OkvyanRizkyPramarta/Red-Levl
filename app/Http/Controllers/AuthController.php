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
            } elseif ($user->role == 'University') {
                return redirect()->intended('/internship/university/dashboard');
            } elseif ($user->role == 'School') {
                return redirect()->intended('/internship/school/dashboard');
            } elseif ($user->role == 'Industry') {
                return redirect()->intended('/internship/industry/dashboard');
            }
        }
        return view('auth.login');
    }   

    public function register()
    {
        return view('auth.register');
    } 

    public function prosesRegister(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255|regex:/^([^0-9]*)$/',
        //     'username' => 'required|min:4|alpha_dash',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => ['required', 'string', new isValidPassword()],
        //     'address' => 'required',
        //     'phone_number' => 'required|string|alpha_num|min:10|max:14|regex:/^([^a-zA-Z]*)$/|regex:/(0)[0-9]{9}/',
        //     'vocational' => 'required|string',
        //     'internship_date' => 'required',
        //     'people_total' => 'required',
        //     'role' => 'required',
        // ]);

        User::create([
            'name' => $request['name'],
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'address' => $request['address'],
            'phone_number' => $request['phone_number'],
            'role' => $request['role'],
        ]);

        // if ($validator->fails()) {
        //     Alert::toast($validator->messages()->all()[0], 'error');
        //     return redirect()->back()->withInput();
        // }

        // Alert::toast('Information saved successfully', 'success');
        return redirect('/login');
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
                } elseif ($user->role == 'Industry') {
                    $request->session()->regenerate();
                    return redirect()->intended('/internship/industry/dashboard');
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
