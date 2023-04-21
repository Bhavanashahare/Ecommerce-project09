@extends('layouts.master')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
     {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Product create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">

                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Enter Title</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="Enter Title" value="{{old('title')}}">
                                        <span class="text-danger">
                                            @error('title')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="description">Enter Description</label>
                                    <textarea type="text" name="description" class="form-control" id="description"
                                        placeholder="Enter description" value="{{old('description')}}"></textarea>
                                        <span class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="image">image</label>
                                    <input type="file" name="image" class="form-control" id="image"
                                        placeholder="Enter image" >
                                        <span class="text-danger">
                                            @error('image')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="form-group">
                                    <label for="category">Select Category</label>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                          @endforeach
                                         </select>
                                         <span class="text-danger">
                                            @error('category_id')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
{{--
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Example select</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                                        @foreach($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                  </div> --}}


                            </div>

                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <script>
                        ClassicEditor
                        .create(document.querySelector('#description'))
                        .catch(error=>{
                          console.error(error);
                        })</script>
                </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">

        </div>
        <!--/.col (right) -->
        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
