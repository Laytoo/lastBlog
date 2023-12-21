<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts=Post::with('category')->take(3)->orderBy('id','DESC')->get();
        $postCat=Post::with('category')->take(2)->orderBy('title','ASC')->get();
        $postnormal=Post::orderBy('id','desc')->paginate(2);

        return view('frontend.index',compact('posts','postCat','postnormal'));
    }

    public function showPost($id)
    {
        $singlePost=Post::findOrFail($id);
        // $user=User::find($singlePost->user_id);

        $postCategory=Post::with('category')->get();
        $moreBlogs=Post::where('id',$singlePost->id)
        ->where('id','!=',$id)->take(4)->get();
        $postPop=Post::take(3)->orderBy('id','desc')->get();

        return view('frontend.single-post',compact('singlePost','postCategory','moreBlogs','postPop'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}
