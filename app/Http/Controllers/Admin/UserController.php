<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\CategoryDataTable;
use App\DataTables\PostDataTable;
use App\DataTables\UserCategoryDataTable;
use App\DataTables\UserPostDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Trait\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\support\Str;
class UserController extends Controller
{
    use ImageUpload;
    //  public function index()
    //  {
    //      return view('frontend.index');
    //  }

     public function dashboard()
     {
         return view('user.dashboard');
     }

    //  public function create()
    //  {

    //      return view ('admin.users.create');
    //  }




     public function index(Request $request,UserPostDataTable $dataTable)
     {

         return $dataTable->render('user.post.show');

     }


     public function showCategory(UserCategoryDataTable $dataTable)
     {

         return $dataTable->render('user.category.show');

     }


     public function create()
     {
         $post=Post::all();
         $categories = Category::all();

         return view('user.post.create',compact('post','categories'));
     }



     public function store(PostRequest $request)
     {
         $imagePath = $this->uploadImage($request, 'image', 'uploads');

         $post = new Post();
         $post->image = $imagePath;
         $post->title = $request->title;
         $post->slug = Str::slug($request->title);
         $post->category_id = $request->category;
         $post->user_id = Auth::user()->id;
         $post->content = $request->content;
         $post->save();

         toastr('Post Created successfully', 'success', 'success');

         return redirect()->route('user.post.show');
     }

     public function show(string $id)
     {
         //
     }


     public function edit(string $id)
     {
         $posts=Post::findOrFail($id);
         $categories = Category::all();

         return view('user.post.edit',compact('posts','categories'));
     }


     public function update(Request $request, string $id)
     {
         $request->validate([
             'image' => ['nullable', 'image', 'max:3000'],
             'title' => ['required', 'max:200'],
             'category' => ['required'],
             'content' => ['required', 'max: 600'],

         ]);

         $post = Post::findOrFail($id);

         $imagePath = $this->updateImage($request, 'image', 'uploads', $post->image);

         $post->image = empty(!$imagePath) ? $imagePath : $post->image;
         $post->title = $request->title;
         $post->slug = Str::slug($request->name);
         $post->category_id = $request->category;
         $post->content = $request->content;
         $post->save();

         toastr('Updated Successfully!', 'success');

         return redirect()->route('user.post.show');

     }


     public function destroy(string $id)
     {
         $post=Post::findOrFail($id);
        //  if($post->user_id !== Auth::user()->user->id){
        //     abort(404);
        // }

         $this->deleteImage($post->image);
         $post->delete();

         toastr('Post Deleted');
         return response(['status'=>'success','message'=>'post Deleted']);

     }



}
