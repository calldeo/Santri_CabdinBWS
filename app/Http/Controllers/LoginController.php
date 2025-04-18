<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
  public function landing(){
    return view('landing');
  }
    public function halamanlogin(){
        return view('sigin.logins');
    }

    public function postlogin(Request $request){
        Session::flash('email',$request->email);
      $request->validate([
        'email'=> 'required',
        'password'=> 'required'
      ],[
        'email.required'=> 'Email wajib di isi',
        
        'password.required'=> 'Password wajib di isi',
      ]);

      $infologin = [
        'email'=> $request->email,
        'password'=> $request->password,
      ];

      if(Auth::attempt($infologin)) {
        $user = Auth::user();
        if (($user->level == "guru" || $user->level == "siswa") && !$user->hasVoted) {
            return redirect('/vote');
        }
        return redirect('mutasi-keluar');
      }else{
        return redirect('/login')->withErrors('Username dan Password yang dimasukkan tidak valid');
      }
    }
     
    function logout()
    {
        Auth::logout();
        return redirect ('/login');
    }

    // public function logout(){
    //     Auth::logout();
    //     return redirect ('/');
    // }
}
