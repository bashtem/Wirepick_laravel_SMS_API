<?php

namespace Wirepick\Smsapi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use yii\httpclient\Client;


class SmsController extends Controller
{
    public function send(Array $parameters){

        $client = new Client();
        $response = $client->createRequest()
            ->setMethod('GET')
            ->setUrl('https://sms.wirepick.com/httpsms/Send')
            ->setData([
                'client' => $parameters['client'],
             'password' => $parameters['password'],
              'affiliate' =>$parameters['affiliate'],
               'phone' => $parameters['phone'],
                'text'=>$parameters['text'], 
                'from' => $parameters['senderId']
            ])
            ->send();
        return $response;
    }
}
