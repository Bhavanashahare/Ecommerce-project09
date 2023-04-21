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
                            <h3 class="card-title">Order Table</h3>
                        </div>
                        <div class="card-header">
                            {{-- <h3 class="card-title"><a href="{{ route('order.index') }}"><button type="button"
                                        class="btn btn-primary btn-sm">Create Product</button></h3></a> --}}
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            {{-- id datatable  id="mytable"--}}
                            <table class="table table-bordered" id="myTable">
                                {{-- end --}}
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th style="width:20px">name</th>
                                        <th style="width:30px">prize</th>
                                        <th style="width:30px">total</th>
                                        <th style="width:30px">Action</th>




                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        <tr>
                                            <td> {{ $d->id }}</td>
                                            <td> {{ $d->name }}</td>
                                            <td> {{ $d->prize }}</td>

                                            <td>{{$d->total }}</td>
                                            <td><button type="button" class="btn btn-warning"> view</button>

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
$(document).ready( function () {
    $('#myTable').DataTable({
        "pageLength" :3
    });
} );
</script>
@endpush

{{-- end --}}
