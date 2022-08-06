<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class ChangePassswordController extends Controller
{
    public function change_password(){

        return view('account.change_password');
    }



    public function update_password(request $request){

    $request ->validate([

    'passwordOld' =>'required|min:6|max:100',
    'passwordNew' =>'required|min:6|max:100',
    'passwordRe' =>'required|min:6|max:100',
    ]);
    $current_user=Auth::User();
 
    if(Hash::check($request->passwordOld,$current_user->password)){
    $current_user->update([
 
        'password' =>bcrypt($request->passwordRe),
         
    ]);
 
    return back()->with('success','Password Successfuly Updated');
    }
    else {
        
        return back()->with('error','old password dose not matched');
       
    }
    }
}


