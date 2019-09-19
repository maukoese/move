<?php 

class Move
{
protected $config;

public function __construct($username, $Key, $senderId)
{
$config = array(
            'action' => 'compose',
            'username' => $username,
            'key' => $Key,
            'sender' => $senderId,
        );
        $this->config = (object)$config;
}

public function send($tophonenumber, $finalmessage, $msgtype, $dlr)
{
            $url => "https://www.sms.movesms.co.ke/API/

$postData = array(
            'action' => 'compose',
            'username' => $this->config->username,
            'api_key' => $this->config->key,
            'sender' => $this->config->sender,
            'to' => $tophonenumber,
            'message' => $finalmessage,
            'msgtype' => $msgtype,
            'dlr' => $dlr,
        );


        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData

        ));

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $output = curl_exec($ch);

        if (curl_errno($ch)) {
            $output = curl_error($ch);
        }
        
        return $output;;

        curl_close($ch);
      }

 }
