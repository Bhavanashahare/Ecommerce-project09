@extends('front.layouts.master')
@section('content')
<table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-left" style="width:15%">Order No.</th>
            <th class="text-left" style="width:10%">Order Date</th>
            <th class="text-center" style="width:10%">Amount</th>
            <th class="text-center" style="width:5%">Qty</th>
            <th class="text-center" style="width:16%">Payment method </th>
            <th class="text-center" style="width:16%">Payment Status</th>
            <th class="text-center" style="width:20%">Order Status</th>
            <th class="text-center" style="width:8%">Action</th>
        </tr>
    </thead>
    <tbody>
        @if(count($data) === 0)
        <tr>
            <td colspan="12">Data not found.</td>
        </tr>
    @else
        @foreach($data as $item)
            <tr>
                <!-- Table row content -->
                 @foreach($data as $d)
    <tr>
        <td>{{$d->order_no}}</td>
        <td>{{$d->created_at}}</td>
        <td>{{$d->amount}}</td>
        <td>{{$d->qty}}</td>
        <td>{{$d->payment_method}}</td>
        <td>{{$d->payment_status}}</td>
        <td>{{$d->order_status}}</td>
        <td>

            <a href="{{ route('order-view',$d->id) }}"> <button class="btn btn-primary" type="submit">view </button></a>

        </td>

    </tr>
    @endforeach
            </tr>
        @endforeach
    @endif
     {{-- @foreach($data as $d)
    <tr>
        <td>{{$d->order_no}}</td>
        <td>{{$d->created_at}}</td>
        <td>{{$d->amount}}</td>
        <td>{{$d->qty}}</td>
        <td>{{$d->payment_method}}</td>
        <td>{{$d->payment_status}}</td>
        <td>{{$d->order_status}}</td>
        <td>
            <button class="btn btn-primary" type="submit">view</button>
        </td>

    </tr>
    @endforeach --}}
</tbody>
</table>

@endsection
