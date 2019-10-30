<?php

namespace Wirepick\Smsapi;

use Illuminate\Http\Request;


class SmsController extends Controller
{
    public function send(Array $parameters){
        $request = new GuzzleHttp\Client();
        $res = $request->request('GET', 'https://sms.wirepick.com/httpsms/Send', [
            'client' => $parameters['client'],
             'password' => $parameters['password'],
              'affiliate' =>$parameters['affiliate'],
               'phone' => $parameters['phone'],
                'text'=>$parameters['text'], 
                'from' => $parameters['senderId']
        ]);
        return $res;
    }
}
