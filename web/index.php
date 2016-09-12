<?
require_once __DIR__ . '/../vendor/autoload.php';
use App\Controllers\SmsController;

$sms = new SmsController();
$body = "Name:Huan(James) Jin, Email:james@raya.co.nz";
//$recipient = "61431048270";
$recipient = "61420314421";
$result = $sms->send($recipient,$body);

if ($result == 0){
    echo "You message has been sent.";
}else{
    print_r($result);
}
die;