<div class="dashboard_sidebar">
    <span class="close_icon">
      <i class="far fa-bars dash_bar"></i>
      <i class="far fa-times dash_close"></i>
    </span>
    <a href="dsahboard.html" class="dash_logo"><img src="images/logo.png" alt="logo" class="img-fluid"></a>
    <ul class="dashboard_link">
      <li {{ setActive(['home']) }}><a class="" href="{{route('home')}}"><i class="fas fa-tachometer"></i>Go To HomePage</a></li>
      <li {{ setActive(['user.post.show']) }}><a href="{{route('user.post.show')}}"><i class="fas fa-list-ul"></i> Posts</a></li>
      <li {{ setActive(['user.category']) }}><a href="{{route('user.category')}}"><i class="far fa-cloud-download-alt"></i> Categories</a></li>


      <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{route('logout')}}"onclick="event.preventDefault();
                this.closest('form').submit();"><i class="far fa-sign-out-alt"></i> Log out</a>
            </form>
      </li>

    </ul>
  </div>
