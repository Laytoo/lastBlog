
@extends('user.layouts.master')
@section('content')

<section class="section">
    <div class="section-header">
      <h1>Posts</h1>
    </div>
    <section id="wsus__dashboard">
        <div class="container-fluid">
            @include('user.includes.sidebar')
        <div class="section-body">
      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
            <div class="dashboard_content mt-2 mt-md-0">
          <div class="card">
            <div class="section-header">
                <h1>Create Posts</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item"><a href="{{route('user.post.show')}}">Posts</a></div>
                  <div class="breadcrumb-item active">Create Post</div>
                </div>
              </div>
            <div class="card-body">
                <form action="{{route('user.post.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="card">
                        <div class="card-body">


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

                          <button type="submit" class="btn btn-primary"> Create </button>
                        </form>
                        </div>
                      </div>
            </div>
          </div>
        </div>
    </div>

      </div>
  </section>

@push('scripts')

@endpush

@endsection

























{{-- @extends('user.layouts.master')
@section('content')

<section id="wsus__dashboard">
    <div class="container-fluid">
      @include('user.includes.sidebar')
    <div class="row">

     <div class="col">
       <div class="card">
         <div class="card-body">
           <h5 class="card-title mb-5 d-inline">Create Posts</h5>

            <form action="{{route('user.post.store')}}" method="POST" enctype="multipart/form-data">
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
</section>

@endsection --}}
