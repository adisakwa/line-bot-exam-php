<?php



require "vendor/autoload.php";

$access_token = '7CpagKQQPjselOrSh9YNG8aHKs0khbDpaNjVLiwav4Gv6gr2kophRKEPGYBDNd7Rhv/m0oI5O+MQ7gbzVM3MxBoUgNXSKw1BmxMraXYEaxD/ayIVVT8KFYSLUGEMqhOhH0mRMG0ToTov0J789ibCfwdB04t89/1O/w1cDnyilFU=';

$channelSecret = '9051e738c0b20081d4e7277186e6db68';

$pushID = 'Ucd8fefa3e6c4116ec020ae2abb751af5';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







