<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Mail;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    

     public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        DB::beginTransaction();
        
        try{

            $user = User::create([
                'name'=> request('name'),
                'email' => request('email'),
                'password' => Hash::make(request('password'))
                ]);

            Mail :: to($user->email)->send(new \App\Mail\WelcomeMsg($user));

            auth()->login($user);

                DB::commit();

            return redirect ()->home();

        }catch(\exception $e){
            DB::rollback();
        }
    }


}