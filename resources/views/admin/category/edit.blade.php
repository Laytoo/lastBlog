@extends('admin.layouts.master')
@section('content')

<div class="container-fluid">
    <div class="row">
     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title mb-5 d-inline">Edit Categories</h5>
            <form method="POST" action="{{route('admin.category.update',$category->id)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-outline mb-4 mt-4">
                    <input type="text"  value="{{$category->name}}" name="name" id="form2Example1" class="form-control" placeholder="name" />
                </div>

                <div class="form-outline mb-4 mt-4">
                    <input type="text" value="{{$category->slug}}" name="slug" id="form2Example1" class="form-control" placeholder="slug" />
                </div>

                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Update</button>
            </form>
         </div>
       </div>
     </div>
   </div>
</div>

@endsection
