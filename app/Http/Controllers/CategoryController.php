<?php

namespace App\Http\Controllers;

use App\DataTables\CategoryDataTable;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use illuminate\support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategoryDataTable $dataTable)
    {

        return $dataTable->render('admin.category.show');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::all();
        return view('admin.category.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // $data=Category::create($request->all());
         $data=new Category();
         $data->name=$request->name;
         $data->slug=Str::slug($request->name);
         $data->save();

        toastr('Category Added Successfully');
        return redirect()->route('admin.category.index');
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
        $category=Category::findOrFail($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data=Category::create($request->all());
         $data=Category::findOrFail($id);
         $data->name=$request->name;
         $data->slug=Str::slug($request->name);
         $data->save();

        toastr('Category Updated Successfully');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        $category=Category::findOrFail($id);
        $post=Post::where('category_id',$category->id)->count();

        if($post > 0 )
        {
            return response(['status'=>'error','message'=>'This Category Contain Posts <h4>You Need
            To Delete Posts First</h4> ']);
        }

        // if(Post::where('post_id',$category->id)->count() > 0)
        // {
        //     return response(['status' => 'error', 'message' => 'This Category have Posts cant delete it.']);
        // }

        $category->delete();
        toastr('Category Deleted');
        return response(['status'=>'success','message'=>'Category Deleted']);

    }
}
