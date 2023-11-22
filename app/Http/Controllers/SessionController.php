<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{
    function index(){
        return view("sesi/index");
    }
    function login(Request $request){
        $request->validate(
            ['name'=>'required',
            'email'=>'required',
            'password'=>'required'],
            ['name.required'=>'Nama mohon Diisi',
             'email.required'=>'Email Wajib Diisi',
             'password.required'=>'Password Wajib Diisi']
        );
        
        $infologin = [
            'email'=> $requestemail -> email,
            'password'=>$requestpassword -> password
        ];
    if (Auth::attempt($infologin)) {
        //kalau otentikasi berhasil
        return('Berhasil');
        
    }else{
        //kalau otentikasi gagal
        return('Kurang Beruntung');
    }
    }
}
