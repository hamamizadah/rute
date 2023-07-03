<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
 public function index(){
    return view ('auth.login');
 }

 public function login(Request $request){
   
   request()->validate([
      'username' => 'required',
      'password' => 'required',
   ]);

   $credentials = $request->only('username', 'password');
   if (Auth::attempt($credentials)){
      return redirect()->intended('dashboard')
      ->withSuccess('Login Berhasil');
   }
   return redirect()->route('viewlogin')->withError('Username atau Password salah');
   
 }


 public function logout(Request $request)
    {
      $request->session()->flush();
      Auth::logout();
      return redirect()->route('viewlogin');
    }
}
