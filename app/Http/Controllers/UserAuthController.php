<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserAuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }

    function create(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:10|max50'
        ]);

        $query = DB::table('users')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);


        if ($query){
            return back()->with('succes','You have been succesfully registered');
        } else {
            return back()->with('fail','Something went wrong');
        }
    }

    function check(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        $user = DB::table('users')
            ->where('email', $request->email)
            ->first();

        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('LoggedUser', $user->id);
                return redirect('/');
            }else{
                return back()->with('fail', 'Invalid password');
            }
        }else{
            return back()->with('fail', 'No account found for this email');
        }
    }

    function logout(){
        if (session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('login');
        };
    }
}
