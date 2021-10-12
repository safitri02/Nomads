@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="card">
  <div class="card-header">
    Page Update Travel
  </div>
  <div class="card-body">
    <form action="/admin/travel/update/{{ $data->id }}" method="post">
    @csrf
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" value="{{ $data->title }}" autofocus="on" autocomplete="off" name="title" >
                </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" value="{{ $data->location }}" autofocus="on" autocomplete="off" name="location" >
                </div>
            </div>
            <div class="col-md-12">
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">About</label>
                    <input class="form-control" value="{{ $data->about }}" id="exampleFormControlTextarea1" name="about" rows="5"></input>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Featured Event</label>
                    <input type="text" class="form-control" value="{{ $data->featured_event}}" autofocus="on" autocomplete="off" name="featured_event" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Language</label>
                    <input type="text" class="form-control" value="{{ $data->language }}" autofocus="on" autocomplete="off" name="language" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Foods</label>
                    <input type="text" class="form-control" value="{{ $data->foods }}" autofocus="on" autocomplete="off" name="foods" >
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" class="form-control" value="{{ $data->type }}" autofocus="on" autocomplete="off" name="type" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" value="{{ $data->date }}" autofocus="on" autocomplete="off" name="date" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" class="form-control" value="{{ $data->duration }}" autofocus="on" autocomplete="off" name="duration" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" value="{{ $data->price }}" autofocus="on" autocomplete="off" name="price" >
                </div>
            </div>
        </div>       
        <button type="submit" class="btn btn-primary float-right">Update Travel</button> 
    </form>
  </div>
</div>
</div>
@endsection

@section('footer')



