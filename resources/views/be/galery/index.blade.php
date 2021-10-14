@extends('be.lay')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
    <div class="card">
    <div class="card-title"><h4 class="mt-2 ml-3">All Photo</h4></div>
    <div class="card-body">
        <a href="/admin/add_gallery" class="btn btn-primary mb-3">Add Photo</a>
        <table class="table table-hover">
            <thead>
                <tr>
                <th>No</th>
                <th>Travel</th>
                <th>Photo</th>
                <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1; ?>
            @foreach ($data as $gallery)
                <tr>
                    <td> {{ $no++ }} </td>
                    <td style="height:100px"> {{ $gallery->travel->title ?? 'Kosong'}} </td>
                    <td> <img class="gambar" src="{{ url('/storage/' .$gallery->image) }}"> </td>
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



