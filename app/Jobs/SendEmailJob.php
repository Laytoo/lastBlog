<?php

namespace App\Jobs;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $details;
    // public $timeout=7200;

    /**
     * Create a new job instance.
     */
    public function __construct($details)
    {
          $this->details=$details;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $users=User::all();
        $input['title']=$this->details['title'];
        $input['body']=$this->details['body'];

        foreach($users as $user)
        {
            $input['name']=$user->name;
            $input['email']=$user->email;
            // \Mail::to($user)->send(new \App\Mail\SendEmail($input));
            // \Mail::to('mohamedelzarei96@gmail.com')->send(new \App\Mail\SendEmail
            // ($input,'emails.test'));
            // }
            Mail::send('admin.emails.test_mail',['input'=>$input],function($message) use ($input)
        {
            $message->to($input['email'],$input['name'])
            ->subject($input['title']);
        });


        }

    }
}
