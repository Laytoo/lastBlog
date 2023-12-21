<?php

namespace App\Http\Controllers;

use App\DataTables\PostDataTable;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Trait\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\support\Str;

use function PHPUnit\Framework\returnSelf;

class PostController extends Controller
{

    use ImageUpload;
    /**
     * Display a listing of the resource.
     */
    public function index(PostDataTable $dataTable)
    {

        return $dataTable->render('admin.post.show');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post=Post::all();
        $categories = Category::all();

        return view('admin.post.create',compact('post','categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        $imagePath = $this->uploadImage($request, 'image', 'uploads');

        $post = new Post();
        $post->image = $imagePath;
        $post->title = $request->title;
        $post->slug = Str::slug($request->slug);
        $post->category_id = $request->category;
        $post->user_id = Auth::user()->id;
        $post->content = $request->content;
        $post->save();

        toastr('Post Created successfully', 'success', 'success');

        return redirect()->route('admin.post.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts=Post::findOrFail($id);
        $categories = Category::all();

        return view('admin.post.edit',compact('posts','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => ['nullable', 'image', 'max:3000'],
            'slug'=>['nullable'],
            'title' => ['required', 'max:200'],
            'category' => ['required'],
            'content' => ['required', 'max: 600'],

        ]);

        $post = Post::findOrFail($id);

        $imagePath = $this->updateImage($request, 'image', 'uploads', $post->image);

        $post->image = empty(!$imagePath) ? $imagePath : $post->image;
        $post->title = $request->title;
        $post->slug = Str::slug($request->slug);
        $post->category_id = $request->category;
        $post->content = $request->content;
        $post->save();

        toastr('Updated Successfully!', 'success');

        return redirect()->route('admin.post.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Post::findOrFail($id);
        $this->deleteImage($post->image);
        $post->delete();

        toastr('Post Deleted');
        return response(['status'=>'success','message'=>'post Deleted']);

    }
}
