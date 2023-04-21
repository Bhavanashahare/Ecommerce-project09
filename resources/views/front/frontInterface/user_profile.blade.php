@extends('front.layouts.app')
@extends('front.layouts.header')

@section('title', 'User')
@section('content')
    {{-- <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Contact</strong></div>
            </div>
        </div>
    </div> --}}

      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">UserProfile</h2>
                </div>
                <div class="col-md-7">

                    <form action="{{ route('user_profile.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="name" class="text-black"> Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="name"
                                        value="{{ old('name') }}">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="email" class="text-black">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder=""
                                        value="{{ old('email') }}">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="password" class="text-black">Password <span
                                            class="text-danger">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        value="{{ old('password') }}">
                                    <span class="text-danger">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="image" class="text-black">Profile-Photo <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control" id="image" name="image"
                                        value="">
                                    <span class="text-danger">
                                        @error('image')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">

                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- <div class="col-md-5 ml-auto">
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Pune</span>
                        <p class="mb-0">Infosys Hinjewadi IT Park, Hinjewadi ,India</p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Mumbai</span>
                        <p class="mb-0">Paramount Building, New Link Road,, Andheri West · </p>
                    </div>
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Nagpur</span>
                        <p class="mb-0">The TCS Nagpur Campus will be located on a 54-acre property in the Mihan SEZ on
                            the outskirts of the city. </p>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>
@endsection
