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

//    public function sms() {
////        $url = "https://api.hubtel.com/v3/messages/send?"
////            . "From=Unity"
////            . "&To=%2B233503123939"
////            . "&Content=Hello%2C+world"
////            . "&ClientId=frbiodfp"
////            . "&ClientSecret=tkreglmn"
////            . "&RegisteredDelivery=true";
////        // Fire the request and wait for the response
////        $response = file_get_contents($url) ;
////        var_dump($response);
//
//        $client = new Client();
//        $response = $client->get('https://api.hubtel.com/v3/messages/send',[
//            'form_params' => [
//                'From' => 'Unity',
//                'To' => '%2B233503123939',
//                'Content' => 'Hello world',
//                'ClientId' => 'cxdvnlbi',
//                'ClientSecret' => 'vbjytixl',
//                'RegisteredDelivery' => true
//            ],
//        ]);
//        $response = json_decode($response->getBody(), true);
//
//    }

    public function sms()
    {
        $message = rawurlencode('Hi Emmanuel this is a test');

        $from = 'UFC Ghana';
        $to = '+233503123939';

        $curl = curl_init();
        $clientId = 'cxdvnlbi';
        $clientSecret = 'vbjytixl';
        $url = "https://api.hubtel.com/v1/messages/send?From=UFC%2C+Ghana&To=%2B233503123939&Content=Testing&ClientId=cxdvnlbi&ClientSecret=vbjytixl&RegisteredDelivery=true";
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

}
