@extends('layouts.master')
@section('content')


{{-- <div class="container">

    <div class="comment-form-wrap pt-5">
        <h3 class="mb-5">Logins</h3>
        <form method="POST" class="p-auto" action="{{route('login')}}">
            @csrf
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" namne="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="website">Password</label>
            <input type="password" name="password" class="form-control" id="website">
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Login</button>
        </div>

        </form>
    </div>
</div> --}}






<div class="container">
    <div class="comment-form-wrap pt-5">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mt-5">Loginss</h5>
              <form method="POST" class="p-auto" action="{{route('login')}}">
                @csrf
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />
                  </div>

                  @error('email')
                  <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
                  @enderror

                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />
                  </div>

                  @error('password')
                  <span class="text-danger" role="alert"><strong>{{$message}}</strong></span>
                  @enderror
                  <!-- Submit button -->
                  <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>
                </form>

            </div>
       </div>
     </div>
    </div>
    </div>
</div>
@endsection
