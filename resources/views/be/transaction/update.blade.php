@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-title"><h4 class="mt-2 ml-3">Update Transaction</h4></div>
    <div class="card-body">
        <form action="/admin/transaction/update/{{ $data->id }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status</label>
                <select class="form-control" name="transaction_status">
                    <option selected>STATUS SAAT INI : {{ $data->transaction_status }}</option>
                    <option value="PENDING">PENDING</option>
                    <option value="SUCCESS">SUCCESS</option>
                    <option value="FAILED">FAILED</option>
                    <option value="CANCEL">CANCEL</option>
                  </select>
            </div>
            <button class="btn btn-primary float-right mr-5 mt-3">UPDATE</button>
        </form>
    </div>
    </div>
</div>
@endsection

@section('footer')






