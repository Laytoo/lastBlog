<?php

namespace App\Console\Commands;

use App\Jobs\SendSubscriptionExpireMessageJob;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SubscriptionExpiryNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'app:subscription-expiry-notification';
    protected $signature = 'subscribtion:subscription-expiry-notification';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check Which subscribed users have been expired';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $expired_customers=Customer::where('subscription_end_date','<',now())->get();
        // dd( $expired_customers);
        foreach($expired_customers as $customer)
        {
            info('we are in command class');
            $expire_date=Carbon::createFromFormat('Y-m-d',$customer->subscription_end_date)->toDateString();
            dispatch(new SendSubscriptionExpireMessageJob($customer, $expire_date))->onQueue('medo');

        }
    }
}
