@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title mb-5 d-inline">Edit Post</h5>
            <form method="POST" action="{{route('admin.post.update',$posts->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Preview image</label>
                    <br>
                    <img src="{{asset($posts->image)}}" width="200px" alt="">
                  </div>

                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="inputState">Category</label>
                    <select id="inputState"  name="category" class="form-control main-category">
                        <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option {{$category->id == $posts->category_id ? 'selected' : ''}}
                                        value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-outline mb-4 mt-4">
                    <input type="text"  value="{{$posts->title}}" name="title" id="form2Example1" class="form-control" placeholder="Title" />
                </div>

                <div class="form-outline mb-4 mt-4">
                    <input type="text" value="{{$posts->slug}}" name="slug" id="form2Example1" class="form-control" placeholder="slug" />
                </div>

                <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote">{!! $posts->content !!}</textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>
            </form>
         </div>
       </div>
     </div>
   </div>
</div>

@endsection
