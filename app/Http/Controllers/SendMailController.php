<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SendMailController extends Controller
{
    public function form()
    {
        return view('admin.emails.send_email_by_queue');
    }

    public function send_emails(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'title'=>'required',
            'body'=>'required',
        ]);
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        // return $request->all();

        $details=[
            'title'=>$request->title,
            'body'=>$request->body,
        ];
        $job=(new SendEmailJob($details));
        dispatch($job);

        return back()->with('success','Mail Send Successfully');
    }
}
