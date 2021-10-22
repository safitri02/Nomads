@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-title"><h4 class="mt-2 ml-3">Transaction</h4></div>
    <div class="card-body">
        {{-- <a href="/admin/add_gallery" class="btn btn-primary mb-3">Add Transaction</a> --}}
        <table class="table table-hover">
            <thead>
                <tr>
                <th>No</th>
                <th>Travel</th>
                <th>User</th>
                <th>Additional Visa</th>
                <th>Transaction Total</th>
                <th>Transaction Status</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            @foreach($data as $d)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td> {{ $d->travel->title }} </td>
                    <td> {{ $d->user->name }} </td>
                    <td> {{ $d->additional_visa}} </td>
                    <td> {{ $d->transaction_total }} </td>
                    <td> {{ $d->transaction_status }} </td>
                    <td> <a href="/admin/transaction/detail/{{ $d->id }}" class="btn btn-primary btn-sm">Detail</a> </td>
                    <td> <a href="" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>
</div>
@endsection

@section('footer')






