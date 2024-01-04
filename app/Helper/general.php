<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

function setActive(array $route)
{
    if(is_array($route)){
        foreach($route as $r){
            if(request()->routeIs($r)){
                return 'active';
            }
        }
    }
}

function limitText($text, $limit = 20)
{
    return Str::limit($text, $limit);
}

function sendEmail($template,$to,$subject,$data)
{
    Mail::send($template,$data->toArray(),function($message)use($to,$subject)
{
    $message->subject($subject);
    $message->to($to);

});
}
