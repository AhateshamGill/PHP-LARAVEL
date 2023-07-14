<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{

        public function SignUp(Request $request){
            $formFields = $request->validate([
                'username' => ['required','min:6'],
                'email' => ['required','email'],
                'password' => ['required','min:6'],
                'image' => ['required'],
            ]);

            $formFields['image'] = $request->file('image')->store('image','public');
            $user = User::create($formFields);
            $formFields['password'] = bcrypt($formFields['password']);
            auth()->login($user);
            return redirect('/admin/index')->with('message','Welcome To Our E-Commerce Store' . auth()->user()->name);
        }

        public function SignOut(Request $request){
            auth()->logout();
            $request->session()->invalidate();
            return redirect('/admin/index')->with('message','You are logged out. Hope! See You Again!');    
        }

        public function SignIn(Request $request){
            $formFields = $request->validate([
                'email' => ['required','email'],
                'password' => ['required','min:6'],
            ]);

            if(auth()->attempt($formFields)){
                $request->session()->regenerate();
                return redirect('/admin/index')->with('message','You have signed in successfully' . auth()->user()->username);  
            }
        }


}