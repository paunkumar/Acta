<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function register()
    {
        return view('admin.register');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|digits:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',

        ]);
        $user = new User;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('success','User Details Successfully Registered !');
    }

    public function verify(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:6',
        ]); 

        $email = $request->email;
        $password = $request->password;

        $user = User::where('email',$email)->first();
        
        if($user->is_admin == 1)
        {
            if(Auth::attempt(['email'=>$email,'password'=>$password]))
            {
                $user = User::where('email',$email)->first();
                Auth::login($user);
                return redirect('/admin/dashboard');
            }
            else
            {
                return redirect()->back()->with('message','Invalid Credentials!');
            }
        }
        else
        {
            return redirect()->back()->with('message','Invalid Credentials!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
