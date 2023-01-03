<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" @if (isset($items->name))
          value='{{$items->name}}'
          @endif  id="name" required value="{{ old('name')}}" />
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
         @enderror
        </div>
      </div>
    </div>
    <div class="col-md-6">
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
            <label class="custom-file-label" for="customFile">Choose file</label>
            @if (isset($items->image))
            <img src="{{url('storage/items/'.$items->image)}}" width="30%">
            @endif
          </div>
  </div>
