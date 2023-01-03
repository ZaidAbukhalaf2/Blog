@extends('layouts_Admin.app')

@section('content')


<div  class="container">
    <div class="row">
        <div class="card_table">
            <div class="card-header d-flex  justify-content-between" >
               <h3> Users</h3>
               <a href="{{route('users.create')}}" class="btn btn-inverse-success btn-fw"> Create User</a>
            </div>
            <div class="card-body">
                <table id="users" class="display responsive nowrap" width="100%">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Actoins</th>

                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)


                      <tr>
                        <td scope="row" data-label="ID" style="width: 20%">{{$user->id}}</td>
                        <td data-label="Name" style="width: 20%">{{$user->name}}</td>
                        <td data-label="title" style="width: 20%">
                            @if ($user->role == '1' )
                            Admin
                            @elseif ($user->role == '0')
                            User
                            @endif

                        </td>
                        <td data-label="Actions" class="d-flex">

                            <button class="btn btn-default">
                                <a type="submit" class="btn btn-default" href="{{route('users.edit',$user->id)}}"><i class="mdi mdi-pencil" style="font-size:24px;color:blue"></i></a>

                            </button>

                            <button class="btn btn-default">
                                <a type="submit" class="btn btn-default" href="{{route('users.show',$user->id)}}"><i class="mdi mdi-eye" style="font-size:24px;color:black"></i></a>

                            </button>
                            <form method="POST" action="{{ route('users.destroy',$user->id) }}">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-default show_confirm mt-2" data-toggle="tooltip" title='Delete'><i class="fa fa-trash" style="font-size:24px;color:red"></i></button>
                            </form>


                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>



            </div>

        </div>

    </div>

</div>
@endsection

@push('script')
<script type="text/javascript">

    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
<script>
      $(document).ready( function () {
        $('#users').DataTable();
    } );
 </script>
@endpush
