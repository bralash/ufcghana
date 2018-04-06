<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    public function signup(Request $request) {
        $user = new User();

        $user->firstname = $request->firstname;
        $user->surname = $request->surname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->mm_provider = $request->mm_provider;
        $user->acc_name = $request->acc_name;
        $user->acc_number = $request->acc_number;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('auth/login');
    }

    public function login(){
        $rules = array(
            'email' => 'required|email',
            'password' => 'required|min:6'
        );

        $validator = Validator::make(Input::all(), $rules);

        if($validator->fails()) {
            return Redirect::to('/auth/login')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            if(Auth::attempt($userdata)) {
                return redirect('dashboard');
            } else {
                return Redirect::to('/auth/login')
                    ->withErrors($validator)
                    ->withInput(Input::except('password'));
            }
        }
    }

    public function logout() {
        Auth::logout();
        return redirect('/auth/login');
    }
}
