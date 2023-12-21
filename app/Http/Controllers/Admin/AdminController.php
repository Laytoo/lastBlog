<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;


class AdminController extends Controller
{


    public function index()
    {
        
            $posts=Post::all();
            $postCount=$posts->count();

            $categories=Category::all();
            $categoryCount=$categories->count();

            $users=User::all();
            $userCount=$users->count();

            return view('admin.dashboard',compact('postCount','categoryCount','userCount'));


    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function show(UserDataTable $dataTable)
    {
        // return view('admin.userList');
        // $data=User::selection()->paginate(5);
        return $dataTable->render('admin.userList');

    }


    public function emailViewAll()
    {
        return view('admin.emails.send_email_to_all_user');
    }


    public function storeAllUserEmail(Request $request)
    {

        $users = User::all();
        $details = array();
        $details['greeting'] = $request->greeting;
        $details['body'] = $request->body;
        $details['actiontext'] = $request->actiontext;
        $details['actionurl'] = $request->actionurl;
        $details['endtext'] = $request->endtext;

        foreach($users as $user) {
            Notification::send($user, new SendEmailNotification($details));
        }

        return redirect()->route('admin.dashboard');
    }


}
