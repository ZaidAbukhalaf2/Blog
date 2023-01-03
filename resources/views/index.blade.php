@extends('layouts.app')

@section('content')
    @if (Auth::user())
        <div class="container-fulid mt-5">
            <div class="row d-flex justify-content-center" style="  --bs-gutter-x: none;">


                <div class="col-lg-4 me-3 mb-3">
                    <div class="card ">
                        <div class="card-body">

                            <div class=" text-end">
                                <a href="#" data-target="#theModal-2" data-toggle="modal">
                                    <div class="col span_1_of_3">
                                        <center>
                                            <span>
                                                <h3>Create Post</h3>
                                            </span>
                                        </center>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-4 ">
                    <div class="card ">
                        <div class="card-body">

                            <div class=" text-end">
                                <a href="#" data-target="#theModal-1" data-toggle="modal">
                                    <div class="col span_1_of_3">
                                        <center>
                                            <span>
                                                <h3>Create Subjec</h3>

                                            </span>
                                        </center>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    @endif

    <div class="modal fade" id="theModal-1" style="z-index:9999999;" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Create a post</div>
                <form action="{{ url('category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row ">

                            <div class="col-lg-12">
                                <div class="row">


                                    <input class="form-control Title_post mb-3" placeholder="Name" id="floatingTextarea"
                                        name="name" required>
                                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <input class="form-control Title_post" placeholder="Title" id="floatingTextarea" name="title"
                                required minlength="5">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="card-body row">
                                <div class="col-lg-12 col-md-12 text-grid">

                                </div>

                                <div class="row ">
                                    <textarea class="form-control ms-3 mt-2" placeholder="What do you want to talk about?" id="floatingTextarea"
                                        name="body" required></textarea>
                                    <div class="card-body row">

                                        <div class="row ">

                                            <div class="col-lg-12">
                                                <div class="row">


                                                    <div class="col-6 modal_img">
                                                        <label for="image_uploads" class="custom-file-upload">
                                                            <i class="fas fa-images"></i>
                                                        </label>
                                                        <input type="file" id="image_uploads"
                                                            name="image"class="ms-3 mt-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-post">Post</button>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="theModal-2" style="z-index:9999999;" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">Create a post</div>
                <form action="{{ url('items') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="row ">

                                <div class="col-lg-12">
                                    <div class="row">

                                        <input type="number" value="{{ Auth::user()->id }}" name="user_id"
                                            style="display: none">
                                        <div class="col-12 mb-3">

                                            <select class="form-select" name="category_id"
                                                aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">

                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input class="form-control Title_post" placeholder="Title" id="floatingTextarea" name="title"
                                required minlength="5">
                            @error('title')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="card-body row">
                                <div class="col-lg-12 col-md-12 text-grid">

                                </div>

                                <div class="row ">
                                    <textarea class="form-control ms-3 mt-2" placeholder="What do you want to talk about?" id="floatingTextarea"
                                        name="body" required></textarea>
                                    <div class="card-body row">

                                        <div class="row ">

                                            <div class="col-lg-12">
                                                <div class="row">


                                                    <div class="col-6 modal_img">
                                                        <label for="image_uploads" class="custom-file-upload">
                                                            <i class="fas fa-images"></i>
                                                        </label>
                                                        <input type="file" id="image_uploads"
                                                            name="image"class="ms-3 mt-2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="submit" class="btn btn-post">Post</button>

                    </div>
                </form>
            </div>
        </div>>
    </div>
    <div class="container d-flex justify-content-center mt-5 ">
        <div class="row ">
            <h1 class="header_font">subjects</h1>
        </div>

    </div>

    <div class="container-fluid  mt-5">
        <div class="row d-flex justify-content-evenly">


            @foreach ($categories as $category)
                <div class="col-12 col-lg-3 col-md-12 col-sm-12 mt-3">

                    <a href="{{ route('items-show', $category->id) }}">
                        <img src="{{ asset('categories/' . $category->image) }}" class="card_category">

                        <h3 class="card-title">{{ $category->title }}</h3>

                    </a>
                    <p class="card-text line">{{ $category->body }}</p>


                </div>
            @endforeach



        </div>
    </div>

    <div class="container-fluid mt-4 mb-5 d-flex justify-content-center">
        <div class="row ">
            <div class="col-12 col-lg-8 col-md-8">

                <div class="row style_box">
                    <div class=" col-lg-3 col-md-4 col-sm-4  me-5">

                        <img src="https://api.time.com/wp-content/uploads/2014/03/improving-life-health-hiking-nature.jpg"
                            class="mt-5" width="200px" alt="...">
                    </div>
                    <div class="card-body col-lg-5 col-md-4 col-sm-4 mt-5 ms-5">
                        <h5 class="card-title mt-3">Card title</h5>
                        <p class="card-text mt-5">Some quick example text to build on the card title and make up the bulk
                            of
                            the card's content.</p>

                    </div>

                </div>


            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ url('category') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="modal-body">
                    <div class="row">
                        <input class="form-control Title_post" placeholder="Title" id="floatingTextarea" name="title">
                        <div class="card-body row">
                            <div class="col-lg-12 col-md-12 text-grid">

                            </div>

                            <div class="row ">
                                <textarea class="form-control ms-3 mt-2" placeholder="What do you want to talk about?" id="floatingTextarea"
                                    name="body"></textarea>
                                <div class="card-body row">

                                    <div class="row ">

                                        <div class="col-lg-12">
                                            <div class="row">


                                                <div class="col-6 modal_img">
                                                    <label for="image_uploads" class="custom-file-upload">
                                                        <i class="fas fa-images"></i>
                                                    </label>
                                                    <input type="file" id="image_uploads" name="image" multiple
                                                        class="ms-3 mt-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer" style="border-top: none">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="submit" class="btn btn-post">Post</button>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>

  
@endsection
