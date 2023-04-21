@extends('front.layouts.master')
@section('title', 'Contact')
@section('content')
    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{ route('index') }}">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Contact</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">Get In Touch</h2>
                </div>
                <div class="col-md-7">

                    <form action="{{ route('contact.message.store') }}" method="post">
                        @csrf
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="c_fname" class="text-black">First Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="c_fname"
                                        value="{{ old('c_fname') }}">
                                    <span class="text-danger">
                                        @error('c_fname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="col-md-6">
                                    <label for="c_lname" class="text-black">Last Name <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_lname" name="c_lname"
                                        value="{{ old('c_lname') }}">
                                    <span class="text-danger">
                                        @error('c_lname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_email" class="text-black">Email <span
                                            class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder=""
                                        value="{{ old('c_email') }}">
                                    <span class="text-danger">
                                        @error('c_email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_subject" class="text-black">Subject <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_subject" name="c_subject"
                                        value="{{ old('c_subject') }}">
                                    <span class="text-danger">
                                        @error('c_subject')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_message" class="text-black">Message </label>
                                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                                    <span class="text-danger">
                                        @error('c_message')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-5 ml-auto">
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

                </div>
            </div>
        </div>
    </div>
@endsection
