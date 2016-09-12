<?php namespace App\Controllers;

use App\Requests\SendsmsRequest;

/**
 * Class ApiController
 * @package App\Controllers
 */
abstract class ApiController
{
    /**
     * @var string
     */
    public $endpoint;

    /**
     * ApiController constructor.
     */
    public function __construct()
    {
        $this->endpoint = 'https://my.smscentral.com.au/api/v3.2';
    }

    /**
     * @param SendsmsRequest $request
     * @return mixed
     */
    public function sendSms(SendsmsRequest $request)
    {
        $smsRequest = get_object_vars($request);
        $output = $this->httpPost($smsRequest);
        return $output;
    }

    /**
     * @param $parameters
     * @return mixed
     */
    public function httpPost($parameters){
        //open connection
        $params = $this->buildPara($parameters);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $output=curl_exec($ch);

        //close connection
        curl_close($ch);
        return $output;
    }

    /**
     * @param $parameters
     * @return string
     */
    private function buildPara($parameters)
    {
        $params = '';
        foreach ($parameters as $key => $value) {
            if (!empty($value)) {
                $params .= $key . '=' . $value . '&';
            }
        }
        rtrim($params, '&');
        return $params;
    }
}