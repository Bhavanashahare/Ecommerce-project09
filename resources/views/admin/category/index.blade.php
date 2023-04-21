@extends('layouts.master')
@section('content')







    <!-- Main content -->


    <section class="content">

        <div class="container-fluid">
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
            @endif
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Category Table</h3>
                         </div>

                        <div class="card-header">
                            <h3 class="card-title"><a href="{{ route('categories.create') }}"><button type="button"
                                        class="btn btn-primary btn-sm">Create</button></h3></a>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered" id="dataTable">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">ID</th>
                                        <th style="width:20px">Title</th>
                                        <th style="width:20px">image</th>
                                        <th style="width:30px">Status</th>
                                        <th style="width: 40px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $d)
                                        <tr>
                                            <td> {{ $d->id }}</td>
                                            <td> {{ $d->title }}</td>
                                            <td><img
                                                src="{{ asset('uploads/' . $d->image) }}"width="50px"height="50px" alt="">
                                        </td>
                                            <td>
                                                @if ($d->status == 1)
                                                    <span class="badge badge-success">active</span>
                                                @else
                                                    <span class="badge badge-danger">deactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-warning">
                                                    <a href="{{ route('categories.edit', $d->id) }}">
                                                        Edit</button></a>
                                                <button type="button" class="btn btn-danger">
                                                    <a href="{{ route('categories.delete', $d->id) }}">

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
@endsection
@push('scripts')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js">
  </script>

  <script>

$(document).ready(function() {

    $('#dataTable').DataTable({
        "pageLength" :3

    });
});
</script>
  @endpush
