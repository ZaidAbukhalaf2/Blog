@extends('layouts_Admin.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">


        <div class="card">

            <div class="card-header">
                <h3>Create Category</h3>
            </div>

            <div class="card-body">
                <form action="{{route('categories.update',$category->id)}}" id="categories" method="POST" enctype="multipart/form-data">
                   @csrf
                   @method('PUT')
                    @include('pages.Admin.Categories.form')

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

@push('script')
<script>

    $(function() {

      $("#categories").validate({
        // Specify validation rules
        rules: {

          name: "required",

          title:{
            required:true,
            minlength:5,
          },

          body:{
            required:true,
            minlength:5,
          },


        },
        // Specify validation error messages
        messages: {
          name: 'Please enter your name',

          title:{
            required:"Please enter your title",
            minlength:'Please enter your title at leat 5 character'
          },

          body:{
            required:"Please enter your body",
            minlength:'Please enter your body at leat 5 character'

          },
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
          form.submit();
        }
      });
    });
    </script>
@endpush
