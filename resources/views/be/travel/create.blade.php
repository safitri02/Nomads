@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="card">
  <div class="card-header">
    Page Add Travel
  </div>
  <div class="card-body">
    <form action="/admin/add_travel" method="post">
    @csrf
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" value="{{ old('title') }}" autofocus="on" autocomplete="off" name="title" >
                </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" value="{{ old('location') }}" autofocus="on" autocomplete="off" name="location" >
                </div>
            </div>
            <div class="col-md-12">
                 <div class="form-group">
                    <label for="exampleFormControlTextarea1">About</label>
                    <textarea class="form-control" value="{{ old('about') }}" id="exampleFormControlTextarea1" name="about" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Featured Event</label>
                    <input type="text" class="form-control" value="{{ old('featured_event') }}" autofocus="on" autocomplete="off" name="featured_event" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Language</label>
                    <input type="text" class="form-control" value="{{ old('language') }}" autofocus="on" autocomplete="off" name="language" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Foods</label>
                    <input type="text" class="form-control" value="{{ old('foods') }}" autofocus="on" autocomplete="off" name="foods" >
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" class="form-control" value="{{ old('type') }}" autofocus="on" autocomplete="off" name="type" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" class="form-control" value="{{ old('date') }}" autofocus="on" autocomplete="off" name="date" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" class="form-control" value="{{ old('duration') }}" autofocus="on" autocomplete="off" name="duration" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" class="form-control" value="{{ old('price') }}" autofocus="on" autocomplete="off" name="price" >
                </div>
            </div>
        </div>       
        <button type="submit" class="btn btn-primary float-right">Add Travel</button> 
    </form>
  </div>
</div>
</div>
@endsection

@section('footer')



