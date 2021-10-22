@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-title"><h4 class="mt-2 ml-3">Detail Transaction {{ $data->user->name }}</h4></div>
    <div class="card-body">
        <table class="table table-bordered">
              <tr>
                <th>Paket Travel</th>
                <td> {{ $data->travel->title }} </td>
              </tr>
              <tr>
                <th>Pembeli</th>
                <td>{{ $data->user->name }}</td>
              </tr>
              <tr>
                <th>Additional Visa</th>
                <td>{{ $data->additional_visa }}</td>
              </tr>
              <tr>
                <th>Total Transaksi</th>
                <td>${{ $data->transaction_total }}</td>
              </tr>
              <tr>
                <th>Status Transaksi</th>
                <td>{{ $data->transaction_status }}</td>
              </tr>
              <tr>
                <th>Pembelian</th>
                <td>
                  <table class="table table-bordered">
                    <tr> 
                      <th>Name</th>
                      <th>Nationality</th>
                      <th>Visa</th>
                      <th>Doe Passport</th>
                    </tr>
                    @foreach ($data->details as $d)
                    <tr>
                      <td>{{ $d->username }}</td>
                      <td> {{ $d->nationality }} </td>
                      <td> {{ $d->is_visa ? '30 Days' : 'N/A' }} </td>
                      <td> {{ $d->doe_passport }} </td>
                    </tr>
                    @endforeach
                  </table>
                </td>
              </tr>
          </table>
    </div>
    <a href="/admin/transaksi" class="btn btn-primary btn-sm">Kembali</a>
    </div>
</div>
@endsection

@section('footer')






