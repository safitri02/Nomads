@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
  <h2> Halaman Dashboard</h2>
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                           TRAVEL </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $travel }}</div>
                    </div>
                    {{-- <div class="col-auto">
                        <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                           TRANSAKSI</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaction }}</div>
                    </div>
                    {{-- <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                         TRANSAKSI SUCCESS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaction_success }}</div>
                  </div>
                  {{-- <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div> --}}
              </div>
          </div>
      </div>
  </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            TRANSAKSI PENDING</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaction_pending }}</div>
                    </div>
                    {{-- <div class="col-auto">
                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('footer')



