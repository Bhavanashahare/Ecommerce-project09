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
                            <h3 class="card-title">CMS create</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="{{ route('cms.update',$cms->id) }}" method="post"  enctype="multipart/form-data">

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
                                    <textarea type="text" class="form-control" id="description" placeholder="Enter description"
                                    name="description" value="{{old('description')}}" name="description"></textarea>
                                        <span class="text-danger">
                                            @error('description')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>

                                    <div class="form-group">
                                        <label for="image">image</label>
                                        <input type="file" name="images[]" multiple  class="form-control" id="image"
                                            placeholder="Enter image" value="images"  >
                                            <span class="text-danger">
                                            @error('images')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="status">Status Type<span class="text-danger">
                                            *</span></label>
                                    <select class="form-control" name="status">
                                        <option value="">Select status Type</option>
                                        <option value="1" @if($cms['status']=='1')selected @endif>Active</option>
                                        <option value="0" @if($cms['status']=='2')selected @endif>Deactive</option>
                                    </select>
                                    <span class="text-danger">
                                        @error('status')
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
