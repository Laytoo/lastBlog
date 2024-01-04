<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendSubscriptionExpireMessageJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $customer;
    private $expireDate;

    /**
     * Create a new job instance.
     */
    public function __construct($customer,$expireDate)
    {
        $this->customer=$customer;
        $this->expireDate=$expireDate;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        info('we are in job class');

        sendEmail('admin.emails.queuemail',$this->customer->email,'your Subscribtion Expired',$this->customer);

    }
}
