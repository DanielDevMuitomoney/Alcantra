<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
      //register

      public function UserRegister(Request $request){
        DB::table('users')->insert([
            'name' => $request-> name,
            'email' => $request-> email,
            'password' => Hash::make($request-> password)
        ]);
        $json = [
            "result" => 2
        ];
        return json_encode($json);
    }

    public function UserLogin(Request $request){
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        //tenta logar
        if(Auth::attempt($credentials)){
            $response = [
                'response' => true
            ];
        }
        else{
            $response = [
                'response' => false
            ];
        }
        return json_encode($response);


        
        

    }
}
