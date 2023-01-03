<div class="container-fluid back-ground">

  <span class="centered">Life is either an adventure or nothing </span>

  <div class="dec">
    <p>
      <span>
        Everything is difficult, but not impossible

      </span>
    </p>
  </div>


    <section class="navigation ">
        <div class="nav-container">
          <div class="brand">
            <a href="{{ route('category-show') }}">
            <span > AK</span>
            </a>
          </div>
          <nav>
            <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
            <ul class="nav-list">

              @guest
              @if (Route::has('login'))
              <li>
            @endif
                <a href="{{route('login')}}">Login</a>
              </li>
              @if (Route::has('register'))
              <li>
                <a href="{{route('register')}}">Register</a>

              </li>
              @endif
              @else

              <li style="color: white" class="mt-3">{{Auth::user()->name}} </li>


              <li>
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">logout</a>


              </li>
              <form id="logout-form" action="{{ route('logout') }}" method="POST"  class="d-none">
                @csrf
            </form>
              @endguest
            </ul>
          </nav>
        </div>
      </section>

    </div>
