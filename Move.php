<?php 
namespace Osen\Move;
class SMS
{
protected $config;

public function __construct($username = 'maukoese', $Key = '3y9zSXGI7hT1GkPA3Eyvs4BnA7RJijX0YN4lg2bwpxMBvukwyA', $senderId = 'SMARTLINK')
{
$config = array(
            'action' => 'compose',
            'username' => $username,
            'key' => $Key,
            'sender' => $senderId,
        );
        $this->config = (object)$config;
}

public function send($tophonenumber, $finalmessage, $msgtype = 5, $dlr = 0)
{
            $url => "https://www.sms.movesms.co.ke/API/
            //https://sms.movesms.co.ke/api/compose?username=maukoese&api_key=3y9zSXGI7hT1GkPA3Eyvs4BnA7RJijX0YN4lg2bwpxMBvukwyA&sender=SMARTLINK&to=[Your+Recipients]&message=[Your message]&msgtype=[Type of the message]&dlr=[Type of Delivery Report]

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
      
      public function balance()
      {
      $url = "https://sms.movesms.co.ke/api/balance?api_key={$this->config->key}";
      }
            
            public function schedule($time)
            {
                        $url = "https://sms.movesms.co.ke/api/schedule?username=maukoese&api_key=&sender=SMARTLINK&to=[Your+Recipients]&message=[Your message]&msgtype=[Type of the message]&dlr=[Type of Delivery Report]&scheduletime=[Schedule Time (Y-m-d H:i:s)]";
            }
            
            public function subscribe($phones = array())
            {
                        $url = "https://sms.movesms.co.ke/api/marketlist?username=maukoese&api_key=&market_list_id=[Market List Id]&name=[Name]&phonenumber=[Phonenumber]";
            }

 }
