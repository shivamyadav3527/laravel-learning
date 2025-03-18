<?php

namespace App\Http\Controllers;

use App\Rules\Uppercase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
    function getUserAddress() {
        return view('Location.address');
    }

    function customForm(Request $request){
        $request->validate([
            'name' => 'required | min:3 | max:10',
            'email' => 'required',
            'number' => 'required',
            'address' => ['required', new Uppercase], //For the custom rule validation we make.
            'skill' => 'required',
            'gender' => 'required',
            'city' => 'required',
            'password' => 'required | confirmed'
        ],
        [
            'gender.required' => 'Gender select kr na be ghouchu',
            'number.required' => 'Number kaun tmhare papa daalenge',
            'name.uppercase' => 'The value should be in the uppercase'
        ]);
        
        return $request;
    }

    function usersData(){
        $users = DB::select('select * from users');
        return view('users', ['users' => $users]);
    }
}
