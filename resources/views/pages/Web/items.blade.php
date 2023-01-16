@extends('layouts.app_style')

@section('content')
<section class="navigation_new">
    <div class="nav-container">
      <div class="brand">
        <a href="{{route('category-show')}}">
        <span class="me-5"> AK</span>
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

  <div class="container-fluid " >
    <div class="row d-grid mt-5 mb-5 " style="justify-items: center">
        @foreach ($items as $item )
        @can('update',$item)
        <a href="{{ route('edit-items',$item->id) }}" class="d-flex justify-content-center">
            <i class="fa fa-pencil-square" style="font-size:24px;position: absolute; color :#e3e0e0 ; margin-left: 450px;
            " ></i>

        </a>
        @endcan


        <div class="col-12 col-lg-6 col-md-8 col-sm-8">
            For User:  {{$item->user->name}}
            <div class="card">
                <img src="{{asset('items/'.$item->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <span>{{$item->created_at}}</span>
                    <h5 class="card-title">{{$item->title}}</h5>
                    <p class="card-text">{{$item->body}}</p>

                </div>
            </div>


        </div>
        @endforeach
    </div>
  </div>
@endsection
