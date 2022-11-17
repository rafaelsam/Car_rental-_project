<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\signupEmail;
use App\Mail\orderEmail;
use App\Mail\sendPriceQoute;
use Mail;

class mailController extends Controller
{
    // function to send email 
    public static function sendSignupEmail($full_name, $email, $verification_code){
        $data = [
            'full_name' => $full_name, 
            'verification_code' => $verification_code
        ];
        Mail::to($email)->send(new signupEmail($data));
    }

    public static function sendOrderEmail($selected, $data){
        $data_order = [            
            'make' => $selected->MakeCompany, 
            'carName' => $selected->carName,
            'ProductionYear' => $selected->ProductionYear,
            'chasis' => $selected->chasis,
            'cover_p' => $selected->cover_p,
            'full_name' => $data->full_name
        ];
        Mail::to($data->email)->send(new orderEmail($data_order));
    }

    public static function send_price_quote($selected, $data){
        $data_quote = [            
            'make' => $selected->MakeCompany, 
            'carName' => $selected->carName,
            'ProductionYear' => $selected->ProductionYear,
            'chasis' => $selected->chasis,
            'cover_p' => $selected->cover_p,
            'full_name' => $data->full_name
        ];
        Mail::to($data->email)->send(new sendPriceQoute($data_quote));
    }
}
