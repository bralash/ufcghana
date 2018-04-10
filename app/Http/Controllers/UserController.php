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
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class UserController extends Controller
{
    protected function sms($name, $number)
    {
        $message = rawurlencode('Hello, welcome to UFC Ghana. Login to your account to begin transactions');

        $from = 'UFC Ghana';
        $to = '0503123939';

        $curl = curl_init();
        $clientId = 'cxdvnlbi';
        $clientSecret = 'vbjytixl';
        $url = "https://api.hubtel.com/v1/messages/send?From=UFC%20Ghana&To=$to&Content=$message&ClientId=cxdvnlbi&ClientSecret=vbjytixl&RegisteredDelivery=true";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
        ));
        curl_exec($curl);
        curl_close($curl);
    }

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
        $user->referral_email = $request->referral_email;
        $user->password = Hash::make($request->password);

        $user->save();

        $this->sms($user->firstname, $user->acc_number);

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
