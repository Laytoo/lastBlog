<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Admin Panel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

     <link href="{{asset('assets/backend/style.css')}}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">



</head>
<body>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#">LOGO</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarText">

        @auth
        <ul class="navbar-nav side-nav" >

            <li class="nav-item {{ setActive(['home']) }}">
              <a class="nav-link" style="margin-left: 20px;" href="{{route('home')}}">Go To HomePage
              </a>
            </li>

            <li class="nav-item {{ setActive(['admin.show']) }}">
              <a class="nav-link" href="{{route('admin.show')}}" style="margin-left: 20px;">Users</a>
            </li>


            <li class="nav-item {{ setActive(['admin.category.index']) }}">
                <a class="nav-link" href="{{route('admin.category.index')}}" style="margin-left: 20px;">Categories</a>
              </li>

              <li class="nav-item {{ setActive(['admin.post.index']) }}">
                <a class="nav-link" href="{{route('admin.post.index')}}" style="margin-left: 20px;">Posts</a>
              </li>


            <li class="nav-item {{ setActive(['admin.send.email.view.all']) }}">
                <a class="nav-link" href="{{route('admin.send.email.view.all')}}" style="margin-left: 20px;">Send Email To Users</a>
              </li>

              <li class="nav-item {{ setActive(['admin.sendEmailQueue']) }}">
                <a class="nav-link" href="{{route('admin.sendEmailQueue')}}" style="margin-left: 20px;">Send Email By Queue</a>
              </li>

          </ul>
        @endauth


        <ul class="navbar-nav ml-md-auto d-md-flex">

            @auth



              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{Auth::user()->name}}
                </a>


                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                </li>

           @else

          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.login')}}">login
              <span class="sr-only">(current)</span>
            </a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
    </nav>

    <div class="container-fluid">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
  </div>
<script type="text/javascript"></script>
<script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




<script>
    @if($errors->any())
              @foreach ($errors->all() as $error)
                  toastr.error("{{$error}}")
              @endforeach
      @endif
</script>

    {{-- $(document).ready(function() {
    $('#summernote').summernote();
    }); --}}

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
