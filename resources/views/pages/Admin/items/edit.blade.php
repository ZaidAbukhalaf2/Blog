@extends('layouts_Admin.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">


        <div class="card">

            <div class="card-header">
                <h3>Edit Item</h3>
            </div>

            <div class="card-body">
                <form action="{{route('items.update',$items->id)}}" id="items" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    @include('pages.Admin.items.form')

                </form>
                <div>
                    <button type="submit" class="btn btn-primary btn-rounded btn-fw ">edit</button>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

@endsection
