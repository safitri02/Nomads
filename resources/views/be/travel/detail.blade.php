@extends('be.lay')
@section('title')
@section('css')
@section('sidebar')

@section('content')
<div class="container">
    <div class="card">
  <div class="card-header">
    Detail Travel {{ $data->title }}
  </div>
  <div class="card-body">
    <form action="" method="">
        <div class="row">
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" value="{{ $data->title }}" autofocus="on" autocomplete="off" name="title" readonly >
                </div>
            </div>
            <div class="col-md-6">
                 <div class="form-group">
                    <label for="">Location</label>
                    <input type="text" class="form-control" value="{{ $data->location }}" autofocus="on" autocomplete="off" readonly name="location" >
                </div>
            </div>
            <div class="col-md-12">
                 <div class="form-group">
                    <label>About</label>
                    <input class="form-control" value="{{ $data->about }}" name="about" readonly rows="5"></input>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Featured Event</label>
                    <input type="text" class="form-control" value="{{ $data->featured_event }}" autofocus="on" autocomplete="off" readonly name="featured_event" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Language</label>
                    <input type="text" class="form-control" value="{{ $data->language }}" autofocus="on" autocomplete="off" readonly name="language" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Foods</label>
                    <input type="text" readonly class="form-control" value="{{ $data->foods }}" autofocus="on" autocomplete="off" name="foods" >
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label for="">Type</label>
                    <input type="text" readonly class="form-control" value="{{ $data->type }}" autofocus="on" autocomplete="off" name="type" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Date</label>
                    <input type="date" readonly class="form-control" value="{{ $data->date }}" autofocus="on" autocomplete="off" name="date" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Duration</label>
                    <input type="text" readonly class="form-control" value="{{ $data->duration }}" autofocus="on" autocomplete="off" name="duration" >
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" readonly class="form-control" value="Rp{{ $data->price }}" autofocus="on" autocomplete="off" name="price" >
                </div>
            </div>
        </div>       
        <a href="/admin/travel" class="btn btn-primary float-right"> Back </a> 
    </form>
  </div>
</div>
</div>
@endsection

@section('footer')



