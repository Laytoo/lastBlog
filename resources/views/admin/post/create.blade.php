@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title mb-5 d-inline">Create Posts</h5>

            <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <input type="file" name="image"  class="form-control">
                </div>

                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
                </div>

                <div class="form-outline mb-4 mt-4">
                    <input type="text" name="slug" id="form2Example1" class="form-control" placeholder="slug" />
                </div>

                <div class="form-group">
                    <label for="inputState">Category</label>
                    <select id="inputState"  name="category" class="form-control main-category">
                        <option value="">Select</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control summernote"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>
            </form>
         </div>
       </div>
     </div>
   </div>
</div>

@endsection
