@extends('layouts.app')

@section('content')


<div class="container mt-5 mb-5">

    <div class="row">

        <form action="{{ route('update-items',$items->id) }}" method="POST">
            @csrf

        <div class="col-md-6 mb-3">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">title</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name='title' @if (isset($items->title))

              value="{{$items->title}}"
              @endif value="{{ old('title')}}" />
              @error('title')
              <div class="alert alert-danger">{{ $message }}</div>
             @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">body</label>
            <div class="col-sm-9">
                <textarea name="body" id="body" class="form-control"   rows="4" >
                    @if (isset($items->body))
                    {{$items->body}}

                    @endif
                </textarea>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
                    </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="custom-file ">
                <input type="file" class="custom-file-input" id="customFile" name="image"
                 @if (isset($items->image)) value="{{$items->image}}"@endif >
                @if (isset($items->image))
                <img src="{{url('storage/Web/items/'.$items->image)}}" width="30%">
                @endif
              </div>
      </div>

      <div>
        <button class="btn btn-primary ms-5 mt-4" type="submit"> Edit</button>

      </div>
    </form>
</div>




@endsection
