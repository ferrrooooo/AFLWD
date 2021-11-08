@extends('layout.mainlayout')
@section('title','Create Tamu')

@section('main-content')
<form action="{{route('tamu.update',$tamu->id)}}" method="post">
    {{ csrf_field() }}
    @csrf
    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <label for="nama">Name</label>
        <input class="form-control" type="text" name="tamu_name" value="{{$tamu->tamu_name}}">
    </div>

    <div class="form-group">
        <label for="checkin">Check In</label>
        <input class="form-control" type="date" name="tamu_checkin" value="">
    </div>

    <div class="form-group">
        <label for="checkout">Check Out</label>
        <input class="form-control" type="date" name="tamu_checkout" value="{">
    </div>

    <div class="form-group">
        <label for="typeroom">Type Room</label>
        <input class="form-control" type="text" name="tamu_typeroom" value="{">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Proses">
    </div>
</form>
@endsection
