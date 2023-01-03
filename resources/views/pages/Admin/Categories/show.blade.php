@extends('layouts_Admin.app')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                Details Category
                </div>

                <div class="card-body">

                    <div class="row d-flex">
                        <div>
                            <b><span class="me-3">Name :</span></b>

                            <td >{{$category->name}}</td>
                        </div>

                    </div>
                    <hr>

                    <div class="row d-flex">
                        <div>
                            <b><span class="me-3">Title :</span></b>

                            <td >{{$category->title}}</td>
                        </div>

                    </div>
                    <hr>
                    <div class="row d-flex">
                        <div>
                            <b><span class="me-3">Body:</span></b>

                            <td >{{$category->body}}</td>
                        </div>

                    </div>
                    <hr>
                    <div class="row d-flex">
                        <div>
                            <b><span class="me-3">Image :</span></b>

                            <td >
                                <img src="{{asset('categories/'.$category->image)}}" width="50%">
                            </td>
                        </div>

                    </div>
                    <hr>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
