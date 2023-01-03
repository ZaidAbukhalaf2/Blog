@extends('layouts.app_style')

@section('content')
<section class="navigation_new">
    <div class="nav-container">
      <div class="brand">
        <a href="{{route('index')}}">
        <span class="me-5"> AK</span>
        </a>

      </div>
      <h4 class="ms-5 pt-4">
        {{Auth::user()->name}}

      </h4>
      <nav>
        <div class="nav-mobile"><a id="navbar-toggle" href="#!"><span></span></a></div>
        {{-- <ul class="nav-list">
          <li>
            <a href="#!">Home</a>
          </li>
          <li>
            <a href="#!">About</a>
          </li>
          <li>
            <a href="#!">Services</a>
            <ul class="navbar-dropdown">
              <li>
                <a href="#!">Sass</a>
              </li>
              <li>
                <a href="#!">Less</a>
              </li>
              <li>
                <a href="#!">Stylus</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Portfolio</a>
          </li>
          <li>
            <a href="#!">Category</a>
            <ul class="navbar-dropdown">
              <li>
                <a href="#!">Sass</a>
              </li>
              <li>
                <a href="#!">Less</a>
              </li>
              <li>
                <a href="#!">Stylus</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#!">Contact</a>
          </li>
        </ul> --}}
      </nav>
    </div>
  </section>

  <div class="container-fluid " >
    <div class="row d-grid mt-5 mb-5" style="justify-items: center">
        @foreach ($items as $item )


        <div class="col-12 col-lg-6 col-md-8 col-sm-8">
            For User:  {{$item->user->name}}
            <div class="card">
                <img src="{{url('storage/items/'.$item->image)}}" class="card-img-top" alt="...">
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
