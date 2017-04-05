@section('nav')

  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
          <div class="navbar-header">

              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Zoetermeer Vooruit') }}
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <ul class="nav navbar-nav">
                  @yield('partial.nav')
              </ul>
              <ul class="nav navbar-nav navbar-left">
                  @if (Auth::guest())
                      <li><a href="welcome">Home</a></li>
                      <li><a href="about">Over ons</a></li>
                      <li><a href="contact">Contact</a></li>
              </ul>
                  @else
                    <li><a href="welcome">Home</a></li>
                    <li><a href="about">Over ons</a></li>
                    <li><a href="enquete">Enquetes</a></li>
                    <li><a href="contact">Contact</a></li>
                  </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                              <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                    </ul>
                  @endif
                  @if (Auth::guest())
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                  </ul>
                  @else

                  @endif
          </div>
      </div>
  </nav>
@endsection
<div class="navspace"></div>
