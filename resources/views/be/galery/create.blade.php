@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">

<div class="card shadow">
  <div class="card-header">
    Page Add Travel
  </div>
  <div class="card-body">
    <form action="/admin/add_gallery" method="post" enctype="multipart/form-data">
    @csrf
        {{-- <div class="row"> --}}
            <div class="col-md">
                 <div class="form-group">
                    <label for="travel">Travel</label>
                    <select name="id_travel" class="form-control" id="id_travel">
                    @foreach ($travel as $t)
                        <option name="id_travel" value="{{ $t->id }}">{{ $t->title }}</option>
                    @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md">
                 <div class="form-group">
                    <label for="exampleFormControlFile1">Upload Photo</label>
                    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
                </div>
            </div>
        {{-- </div>       --}}
        <button type="submit" class="btn btn-primary float-right">Add Travel</button> 
    </form>
  </div>
</div>
</div>
</div>
</div>
@endsection

@section('footer')



