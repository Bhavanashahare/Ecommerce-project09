@extends('layouts.master')
@section('content')
    <!-- Main content -->

    <div class="container-fluid">
        <section class="content">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">CMS Table</h3>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title">
                                <a href="{{ route('cms.create') }}"><button type="button"
                                        class="btn btn-primary btn-sm">Create</button></a>
                            </h3>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- id datatable  id="mytable" --}}
                            <table class="table table-bordered" id="myTable">
                                {{-- end --}}
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th style="width:20px">Title</th>
                                        <th style="width:30px">description</th>
                                        <th style="width:30px">image</th>
                                        <th style="width:30px">status</th>
                                        <th style="width:30px">Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cms as $d)
                                        <tr>
                                            <td> {{ $d->id }}</td>
                                            <td> {{ $d->title }}</td>
                                            <td>{!! $d->description !!}</td>

                                            <td>

                                                <?php
                                                 $img_url = explode("|",$d->images);


                                                 ?>
                                                 @foreach($img_url as $img)
                                                 <img src="{{ asset('uploads/car/'.$img) }}" width="70px" height="70px" alt="Image">
                                                 @endforeach

                                             </td>
                                           {{-- end --}}

                                            <td>
                                                @if ($d->status == 1)
                                                    <span class="badge badge-success">active</span>
                                                @else
                                                    <span class="badge badge-danger">deactive</span>
                                                @endif
                                            </td>
                                            <td><button type="button" class="btn btn-warning">
                                                    <a href="{{ route('cms.edit', $d->id) }}">
                                                        Edit</button></a>
                                                <button type="button" class="btn btn-danger">
                                                    <a href="{{ route('cms.delete', $d->id) }}">

                                                        Delete</button></a>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{-- <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
    </div><!-- /.container-fluid -->
    </section>
    </div>

    {{-- datatable take same (id  #myTable=myTable --}}
@endsection
@push('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "pageLength": 3
            });
        });
    </script>
@endpush

{{-- end --}}
