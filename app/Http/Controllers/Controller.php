<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

      public function sendSMS($mobileNo, $ticketNumber, $chitAmount, $smsType)
      {
            
            
            //Your message to send, Add URL encoding here.
            $message = urlencode("Dear Prized member, we are happy to inform you that your Ticket No ".$ticketNumber." has been prized for the value of ".$chitAmount."/- will be credited within 7 days from the date of Lot.");

            //Define route 
            $route = 4;
            //Prepare you post parameters
            $postData = array(
                'authkey' => config('sms.auth_key'),
                'mobiles' => $mobileNo,
                'message' => $message,
                'sender' => config('sms.sender_id'),
                'route' => $route
            );

       
            $url=''.config('sms.url').'authkey = '.config('sms.auth_key').' &mobiles='.$mobileNo.'&message='.$message.'&sender='.config('sms.sender_id').'&route='.config('sms.route').'&country=0';

            // init the resource
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => $url,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $postData
                //,CURLOPT_FOLLOWLOCATION => true
            ));


            //Ignore SSL certificate verification
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


            //get response
            $output = curl_exec($ch);

            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }

            curl_close($ch);
      }
}
