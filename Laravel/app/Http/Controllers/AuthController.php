<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

   public function register(Request $request){
       //validate
        $request->validate([
            'username'=>['required','alpha_num'],
             'email'=> ['email', 'unique:Users'],
             'password'=>['confirmed' , 'min:6' , 'max:15' ],

        ]);
          //store
        $user = User::create($request->all());

        //login
        Auth::login($user);

        //redirect
         return redirect()->route('home')->with('Success to save');
   }

   public function login(Request $request){
   $filed =  $request->validate([

         'email'=> ['email', 'required'],
         'password'=>[  'required' ],

    ]);

    //try to login
     $user=\App\Models\User::where('email',$request->email)->first();
     if($user && $request->password === $user->password){
       Auth::login($user);
         return redirect()->route('home');
     }
     else{
       return back()->withErrors([
       'error'=>'The credentisls do not match our records',
       ]);
     }
   }
   public function logout(Request $request){
    Auth::logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
   }
}
