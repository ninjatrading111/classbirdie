<?php
namespace App\Http\Controllers;

use App\Helpers\StripePayment;
use Illuminate\Http\Request;
use Stripe;
use Illuminate\View\View;
use App\Http\Requests;
use Auth;
use App\Models\Payment;
use Carbon\Carbon;

// use App\Helpers\StripePayment;

class PaymentController extends Controller
{

    public function index(Request $request)
    {
        if ($request->id) {

            $amount = 3999;
        } else
            $amount = 799;

        $stripe_data = array(
            'amount' => $amount,
            'currency' => 'usd',
        );
        $stripe = new StripePayment();
        $result = $stripe->ceatePaymentElement($stripe_data);
        if ($result['status'] == 0)
            abort(500);
        $pay_result = $result['data'];

        $data = array(
            'intent' => $pay_result['client_secret'],
            'id' => $pay_result['id'],
        );
        return view('auth.geooglesign', compact('data'));
    }

    public function payWithStripe(Request $request)
    {
        $stripe = new StripePayment();
        $result = $stripe->RetrievePaymentIntent($request->payment_intent);
        if ($result['status'] == 0) {
            return redirect()->back()->with('error', 'Payment Error');
        } else if ($result['status'] == 1) {
            $create_date = now()->format('Y-m-d');
            $amount = $result['data']['amount'] / 100;
            $flag = 0;
            $pay_type = 0;
            $payment = Payment::where('user_id', Auth::user()->id)->where('pay_status', 1)->first();
            if ($payment) {
                $last_end = $payment->pay_ended;
                $payment->pay_status = 0;
                $payment->save();
                $startDate = Carbon::parse($create_date);
                $endDate = Carbon::parse($last_end);
                $differenceInDays = $endDate->diffInDays($startDate);
                if ($amount == 7.99) {
                    $end_date = now()->addDays(7 + $differenceInDays)->format('Y-m-d');
                } else {
                    $end_date = now()->addDays(30 + $differenceInDays)->format('Y-m-d');
                    $flag = 1;
                    $pay_type = 1;

                }
            } else {
                if ($amount == 7.99) {
                    $end_date = now()->addDays(7)->format('Y-m-d');
                } else {
                    $end_date = now()->addDays(30)->format('Y-m-d');
                    $flag = 1;
                    $pay_type = 1;

                }
            }

            Payment::create([
                'user_id' => Auth::user()->id,
                'pay_intent' => $result['data']['id'],
                'pay_amount' => $amount,
                'pay_method_type' => $result['data']['payment_method_types'][0],
                'pay_currency' => $result['data']['currency'][0],
                'pay_type' => $pay_type,
                'pay_created' => $create_date,
                'pay_ended' => $end_date,
                'flag' => $flag
            ]);

        }
        return redirect()->route('profile');
    }
    public function stripe()
    {
        return view('stripe');
    }


    public function stripeCheckout(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $redirectUrl = route('stripe.checkout.success') . '?session_id={CHECKOUT_SESSION_ID}';
        $response = $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'customer_email' => 'demo@gmail.com',
            'payment_method_types' => ['link', 'card'],
            'line_items' => [
                [
                    'price_data' => [

                        'product_data' => [

                            'name' => $request->product,

                        ],
                        'unit_amount' => 100 * $request->price,
                        'currency' => 'USD',
                    ],
                    'quantity' => 1
                ],
            ],
            'mode' => 'payment',
            'allow_promotion_codes' => true
        ]);
        return redirect($response['url']);
    }
    public function stripeCheckoutSuccess(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $session = $stripe->checkout->sessions->retrieve($request->session_id);
        info($session);
        return redirect()->route('stripe.index')->with('success', 'Payment successful.');

    }

}
