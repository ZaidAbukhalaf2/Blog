@extends('layouts_Admin.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">


        <div class="card">

            <div class="card-header">
                <h3>Edit User</h3>
            </div>

            <div class="card-body">
                <form action="{{route('users.update',$user->id)}}" id="users"  method="POST">
                    @csrf
                    @method('PUT')
                    @include('pages.Admin.User.form')

                    <div>
                        <button type="submit" class="btn btn-primary btn-rounded btn-fw ">edit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
</div>


@endsection



@push('script')
<script>

    $(function() {

      $("#users").validate({
        // Specify validation rules
        rules: {

          name: "required",

          email:{
            required:true,
            email:true,
          },

          password:{
            required:true,
            minlength:8,
          },


        },
        // Specify validation error messages
        messages: {

          name: 'Please enter your name',

          email:"Please enter a valid email address",

          password:{
            required: "Please provide a password",
            minlength: "Your password must be at least 8 characters long"

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
