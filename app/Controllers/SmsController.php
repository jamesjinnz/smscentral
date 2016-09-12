<?php namespace App\Controllers;

use App\Requests\SendsmsRequest;

/**
 * Class SmsController
 * @package App\Controllers
 */
class SmsController extends ApiController
{
    /**
     * @param $recipient
     * @param $body
     * @return mixed
     */
    public function send($recipient, $body)
    {
        $request = $this->initMsg($recipient,$body);
        return $this->sendSms($request);
    }

    /**
     * @param $recipient
     * @param $body
     * @return SendsmsRequest
     */
    private function initMsg($recipient,$body)
    {
        $request = new SendsmsRequest('james@raya.co.nz', '987654321');
        $request->RECIPIENT = $recipient;
        $request->MESSAGE_TEXT = $body;
        return $request;
    }
}