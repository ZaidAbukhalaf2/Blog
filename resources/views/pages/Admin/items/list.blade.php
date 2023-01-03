@extends('layouts_Admin.app')

@section('content')


<div  class="container">
    <div class="row">
        <div class="card_table">
            <div class="card-header d-flex  justify-content-between" >
               <h3> Items</h3>
               <a href="{{route('items.create')}}" class="btn btn-inverse-success btn-fw"> Create Item</a>
            </div>

            <div class="card-body">
                <table id="items" class="display responsive nowrap" width="100%">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">title</th>
                        <th scope="col">Image</th>
                        <th scope="col">Actoins</th>

                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($items as $item )


                      <tr>
                        <td scope="row" data-label="ID" style="width: 20%">{{$item->id}}</td>
                        <td data-label="Name" style="width: 20%">{{$item->name}}</td>
                        <td data-label="title" style="width: 20%">{{$item->title}}</td>
                        <td data-label="Image"><img src="{{url('storage/items/'.$item->image)}}" width="30%"></td>
                        <td data-label="Actions" class="d-flex">

                            <button class="btn btn-default">
                                <a type="submit" class="btn btn-default" href="{{route('items.edit',$item->id)}}"><i class="mdi mdi-pencil" style="font-size:24px;color:blue"></i></a>

                            </button>

                            <button class="btn btn-default">
                                <a type="submit" class="btn btn-default" href="{{route('items.show',$item->id)}}"><i class="mdi mdi-eye" style="font-size:24px;color:black"></i></a>

                            </button>
                            <form method="POST" action="{{ route('items.destroy',$item->id) }}">
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
        $('#items').DataTable();
    } );
 </script>
@endpush
