@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-title"><h4 class="mt-2 ml-3">Data Travel</h4></div>
    <div class="card-body">
        <a href="/admin/add_travel" class="btn btn-primary mb-3">Add Travel</a>
        <table class="table table-hover">
            <thead>
                <tr>
                <th>No</th>
                <th>Title</th>
                <th>Location</th>
                <th>About</th>
                <th>Price</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            @foreach($data as $travel)
                <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $travel->title }}</td>
                <td>{{ $travel->location }}</td>
                <td>{{ $travel->about }}</td>
                <td>Rp{{ $travel->price }}</td>
                <td>
                    <a href="/admin/travel/update/{{ $travel->id }}" class="badge badge-pill badge-warning mb-2">Update</a>
                    <a href="/admin/travel/detail/{{ $travel->id }}" class="badge badge-pill badge-success mb-2">Detail</a>
                    <a href="/admin/travel/delete/{{ $travel->id }}" class="badge badge-pill badge-danger">Delete</a>
                </td>
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



