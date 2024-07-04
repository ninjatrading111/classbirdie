<?php
namespace App\Helpers;

class StripePayment{
    public function ceatePaymentElement($data,$account_id=null){
        // dd(env('STRIPE_SECRET'));
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        //curl_setopt($ch, CURLOPT_POSTFIELDS, "amount=2000&currency=eur&payment_method_types[]=card");
        curl_setopt($ch, CURLOPT_USERPWD,  env('STRIPE_SECRET') . ':' .  env('STRIPE_KEY'));
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';
        $headers = array();
        // if($account_id)
        //     $headers[] = 'Stripe-Account: ' . $account_id;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        $result = json_decode($result, true);
        // dd($result,'resu');
        if(isset($result['error'] )){
            return array('status' => 0,  'message' =>  $result['error']['message']);
        }
        return array('status' => 1,  'data' =>  $result);
    }
    public function RetrievePaymentIntent($payment_intent_id, $account_id = null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/' . $payment_intent_id);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_USERPWD,  env('STRIPE_SECRET') . ':' .  env('STRIPE_KEY'));

        $headers = array();
        if($account_id)
            $headers[] = 'Stripe-Account: ' . $account_id;
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return array('status' => 0,  'message' =>  curl_error($ch));
        }
        curl_close($ch);
        $result = json_decode($result, true);
        
        if(isset($result['error'] )){
            return array('status' => 0,  'message' =>  $result['error']['message']);
        }
        return array('status' => 1,  'data' =>  $result);
    }
}
