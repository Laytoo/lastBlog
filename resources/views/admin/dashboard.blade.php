@extends('admin.layouts.master')
@section('content')


    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Posts</h5>
            <p class="card-text">number of posts:{{$postCount}}</p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Categories</h5>

            <p class="card-text">number of categories:{{$categoryCount}} </p>

          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Users</h5>

            <p class="card-text">number of User: {{$userCount}}</p>

          </div>
        </div>
      </div>
    </div>


@endsection
