<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <title>@yield('title')</title>
  <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.nice-number.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.calendar.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/add_row_custon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/mobile_menu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.exzoom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/multiple-image-video.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/ranger_style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.classycountdown.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/venobox.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <!-- <link rel="stylesheet" href="css/rtl.css"> -->

{{-- datatable css from admin templates --}}

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">



  {{--------------------------------- This is from Admin panel templates -----------------------------------}}

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{asset('backend/assets/modules/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.css')}}">


  {{-- toaster link --}}
  {{-- datatables link --}}
  {{-- icon picker link --}}



  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('backend/assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/css/components.css')}}">




</head>

<body>


  {{-- @include('frontend.user_dashboard.includes.header') --}}

  <!--=============================
    DASHBOARD MENU START
  ==============================-->
  <div class="wsus__dashboard_menu">
    <div class="wsusd__dashboard_user">
      <img src="{{Auth::user()->image ? asset(Auth::user()->image) : asset('/frontend/assets/images/dashboard_user.jpg')}}" alt="img" class="img-fluid">
      <p>{{Auth::user()->name}}</p>
    </div>
  </div>
  <!--=============================
    DASHBOARD MENU END
  ==============================-->


        @include('user.includes.sidebar')
      {{-- <div class="dashboard_sidebar">
        <span class="close_icon">
          <i class="far fa-bars dash_bar"></i>
          <i class="far fa-times dash_close"></i>
        </span>
        <a href="dsahboard.html" class="dash_logo"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
        <ul class="dashboard_link">
          <li><a class="active" href="{{route('home')}}"><i class="fas fa-tachometer"></i>Dashboardd</a></li>
          <li><a href="{{route('user.post.create')}}"><i class="fas fa-list-ul"></i> Posts</a></li>
          <li><a href="dsahboard_download.html"><i class="far fa-cloud-download-alt"></i> Categories</a></li>
          <li><a href="dsahboard_review.html"><i class="far fa-star"></i> Reviews</a></li>
          <li><a href="dsahboard_wishlist.html"><i class="far fa-heart"></i> Wishlist</a></li>

          <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{route('logout')}}"onclick="event.preventDefault();
                    this.closest('form').submit();"><i class="far fa-sign-out-alt"></i> Log out</a>
                </form>
          </li>

        </ul>
      </div> --}}

      {{-- <div class="row">
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
      </div> --}}
   

  @yield('content')





  <!--============================
      SCROLL BUTTON START
    ==============================-->
  <div class="wsus__scroll_btn">
    <i class="fas fa-chevron-up"></i>
  </div>
  <!--============================
    SCROLL BUTTON  END
  ==============================-->


  <!--jquery library js-->
  <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
  <!--bootstrap js-->
  <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <!--font-awesome js-->
  <script src="{{asset('frontend/assets/js/Font-Awesome.js')}}"></script>
  <!--select2 js-->
  <script src="{{asset('frontend/assets/js/select2.min.js')}}"></script>
  <!--slick slider js-->
  <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
  <!--simplyCountdown js-->
  <script src="{{asset('frontend/assets/js/simplyCountdown.js')}}"></script>
  <!--product zoomer js-->
  <script src="{{asset('frontend/assets/js/jquery.exzoom.js')}}"></script>
  <!--nice-number js-->
  <script src="{{asset('frontend/assets/js/jquery.nice-number.min.js')}}"></script>
  <!--counter js-->
  <script src="{{asset('frontend/assets/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/jquery.countup.min.js')}}"></script>
  <!--add row js-->
  <script src="{{asset('frontend/assets/js/add_row_custon.js')}}"></script>
  <!--multiple-image-video js-->
  <script src="{{asset('frontend/assets/js/multiple-image-video.js')}}"></script>
  <!--sticky sidebar js-->
  <script src="{{asset('frontend/assets/js/sticky_sidebar.js')}}"></script>
  <!--price ranger js-->
  <script src="{{asset('frontend/assets/js/ranger_jquery-ui.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/ranger_slider.js')}}"></script>
  <!--isotope js-->
  <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
  <!--venobox js-->
  <script src="{{asset('frontend/assets/js/venobox.min.js')}}"></script>
  <!--classycountdown js-->
  <script src="{{asset('frontend/assets/js/jquery.classycountdown.js')}}"></script>

  <!--main/custom js-->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  {{--------------------------------- This is from Adminpanel Tamplets ----------------------------}}
 <!-- General JS Scripts -->
 <!-- JS Libraies -->
 <script src="{{asset('backend/assets/modules/summernote/summernote-bs4.js')}}"></script>
 <!-- Page Specific JS File -->
 <script src="{{asset('backend/assets/js/page/index-0.js')}}"></script>
 <!-- Template JS File -->
 <script src="{{asset('backend/assets/js/scripts.js')}}"></script>
 <script src="{{asset('backend/assets/js/custom.js')}}"></script>

 <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
 <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
 <script src="{{asset('backend/assets/modules/moment.min.js')}}"></script>

 <script src="{{asset('backend/assets/modules/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 {{--------------------------------------------- end -----------------------------------------------}}



 {{-- script for showing the Error message  --}}
  <script>
      @if($errors->any())
                @foreach ($errors->all() as $error)
                    toastr.error("{{$error}}")


                @endforeach
        @endif
  </script>

{{-- <script>
    /** summernote **/
    $('.summernote').summernote({
        height:150
    })

    /** date picker **/
    $('.datepicker').daterangepicker({
        locale: {
            format: 'YYYY-MM-DD'
        },
        singleDatePicker: true
    });
  </script> --}}

  {{-- For Delete Item script --}}
<script>
    $(document).ready(function()
    {

        $.ajaxSetup
        ({
            headers:
            {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('body').on('click','.delete-item',function(event)
        {
            event.preventDefault();
            let deleteUrl = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) =>
                {
                 if (result.isConfirmed)
                    {
                        $.ajax
                        ({
                            type: 'DELETE',
                            url: deleteUrl,
                            success: function(data)
                            {

                                if(data.status == 'success')
                                {
                                    Swal.fire
                                    (
                                    'Deleted!',
                                    data.message,
                                    'success'
                                    )
                                    window.location.reload();
                                }else if (data.status == 'error')
                                {
                                    Swal.fire
                                    (
                                    'Cant Delete',
                                    data.message,
                                    'error'
                                    )
                                }
                            },
                            error: function(xhr, status, error)
                            {console.log(error);}
                        })
                    }
                })
        })
    })
</script>

@stack('scripts')
</body>

</html>
