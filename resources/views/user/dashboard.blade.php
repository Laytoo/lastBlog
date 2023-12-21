
@extends('user.layouts.master')
@section('content')

  <section id="wsus__dashboard">
    <div class="container-fluid">

      <div class="row">
        <div class="col-xl-9 col-xxl-10 col-lg-9 ms-auto">
          <div class="dashboard_content">
            <div class="wsus__dashboard">
              <div class="row">
                <div class="col-xl-4 col-6 col-md-4">
                  <a class="wsus__dashboard_item red" href="">
                    <i class="far fa-address-book"></i>
                    <p>Posts</p>
                  </a>
                </div>
                <div class="col-xl-4 col-6 col-md-4">
                  <a class="wsus__dashboard_item green" href="dsahboard_download.html">
                    <i class="fal fa-cloud-download"></i>
                    <p>Categories</p>
                  </a>
                </div>


                <div class="col-xl-4 col-6 col-md-4">
                  <a class="wsus__dashboard_item orange" href="dsahboard_profile.html">
                    <i class="fas fa-user-shield"></i>
                    <p>Users</p>
                  </a>
                </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection


