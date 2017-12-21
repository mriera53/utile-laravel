
<<<<<<< HEAD
=======
<link rel="stylesheet" href="/css/style.css">

<div class="banner">



  <div class="logoo">
    <a class="nav-link active" href="home.php"><img src="/imagenes/logo/utile.png" class="logo" alt=""></a>
  </div>

  <ul class="nav nav-pills">
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    @endguest



  </ul>

</div>

</body>
</html>
>>>>>>> 68dfbe12ab661bd9cb251749cae0af45e7a777a5
