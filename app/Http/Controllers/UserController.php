<?php

namespace App\Http\Controllers;

use App\Verification;
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
use Twilio;

class UserController extends Controller
{
    protected function code($digits) {
        $temp = "";

        for ($i = 0; $i < $digits; $i++) {
            $temp .= rand(0, 9);
        }

        return (int)$temp;
    }

    protected function sms($name, $number, $code)
    {
        $message = rawurlencode('Hello '.$name.'. Your UFC Ghana verification code is: '.$code);

        $from = 'UFC Ghana';
        $to = $number;

        $curl = curl_init();
        $clientId = env("CLIENTID", "cxdvnlbi");
        $clientSecret = env("CLIENTSECRET", "vbjytixl");
        $url = "https://api.hubtel.com/v1/messages/send?From=$from&To=$to&Content=$message&ClientId=$clientId&ClientSecret=$clientSecret&RegisteredDelivery=true";
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
        $verification = new Verification();

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

        $name = $request->firstname .' '. $request->surname;
        $number = $request->acc_number;
        $user->save();
        Auth::login($user);

        $verification->user_id = $user->id;
        $verification->v_code = $this->code(4);
        $carbon_date = Carbon::parse(Carbon::now());
        $verification->expiry_date = $carbon_date->addHours(24);

        $verification->save();

        $this->sms($name, $number,$verification->v_code);

        return redirect('auth/verify/'.Auth::user()->id);
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

    public function test() {
        return $this->code(4);
    }

    public function verify() {
        $verify = Verification::where('user_id',Auth::user()->id)->orderBy('id','desc')->first();
        if(Carbon::now()->gt($verify->expiry_date)) {
            abort(404);
        } return 'Lesser';
    }

    public function verifyPhone(Request $request) {
        $code = Verification::where('user_id',Auth::user()->id)->orderBy('id','desc')->first();
        if($request->v_code == $code->v_code) {
            return 'dashboard';
        }
        return Redirect::to('/auth/verify/'.Auth::user()->id)
            ->withErrors(['Wrong verification code']);
    }


}
