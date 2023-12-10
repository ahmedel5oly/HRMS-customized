<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public Function login(Request $request){
        $incomingFields=$request->validate([
            'loginusername'=>['required'],
            'loginpassword'=>['required']
        ]);
        if(auth()->attempt(['username'=>$incomingFields['loginusername'], 'password'=>$incomingFields['loginpassword']])){
            //use session method to send cookie to browser to keep the user loged in all over the pages
            $request->session()->regenerate();
            return redirect('/')->with('success', 'you have loggedin');
        }else{
            return redirect('/')->with('failure', 'invalid login');
        }
    }

}
