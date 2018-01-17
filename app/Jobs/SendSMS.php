<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Mail\SendEmailMailable;
use Mail;

class SendSMS implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    protected $mobileNo;

    protected $ticketNumber;

    protected $chitAmount;

    protected $smsType;


    /**
     * Create a new job instance.
     *
     * @return void
     */
      public function __construct($mobileNo, $ticketNumber, $chitAmount, $smsType)
      {
            $this->mobileNo = $mobileNo;
            $this->ticketNumber = $ticketNumber;
            $this->chitAmount = $chitAmount;
            $this->smsType = $smsType; 

      }

    /**
     * Execute the job.
     *
     * @return void
     */
      public function handle()
      {
             
            $this->sendSms();
            
      }

      protected function sendSms()
      {
          
            //Your message to send, Add URL encoding here.
            $message = urlencode("Dear Prized member, we are happy to inform you that your Ticket No ".$this->ticketNumber." has been prized for the value of ".$this->chitAmount ."/- will be credited within 7 days from the date of Lot.");

            //Define route 
            $route = 4;
            //Prepare you post parameters
            $postData = array(
                'authkey' => config('sms.auth_key'),
                'mobiles' => $this->mobileNo,
                'message' => $message,
                'sender' => config('sms.sender_id'),
                'route' => $route
            );

       
            $url=''.config('sms.url').'authkey = '.config('sms.auth_key').' &mobiles='.$this->mobileNo.'&message='.$message.'&sender='.config('sms.sender_id').'&route='.config('sms.route').'&country=0';

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
