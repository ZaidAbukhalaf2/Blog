<div class="row">
    <div class="col-md-6">
      <div class="form-group row">
        <label class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="name" @if (isset($category->name))
          value='{{$category->name}}'
          @endif  id="name" value="{{ old('name')}}"/>
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
          <input type="text" class="form-control" name='title' @if (isset($category->title))

          value="{{$category->title}}"
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
            <textarea class="form-control" id="body" name="body"  rows="4"  value="{{ old('body')}}">
                @if (isset($category->body))
                {{$category->body}}
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
             @if (isset($category->image))value="{{$category->image}}"@endif >
            <label class="custom-file-label" for="customFile">Choose file</label>
            @if (isset($category->image ))
            <img src="{{asset('categories/'.$category->image)}}" width="30%">

            @endif
          </div>
  </div>
