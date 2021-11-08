@extends('layout.mainlayout')
@section('title','Create Kamar')

@section('main-content')
<form action="{{route('room.update',$room->room_code)}}" method="post">
    {{ csrf_field() }}
    @csrf
    <input type="hidden" name="_method" value="PATCH">

    <div class="form-group">
        <label for="nama">Room Type</label>
        <input class="form-control" type="text" name="room_type" value="{{$room->room_type}}">
    </div>

    <div class="form-group">
        <label for="details">Details</label>
        <input class="form-control" type="text" name="room_details" value="">
    </div>

    <div class="form-group">
        <label for="price">Price</label>
        <input class="form-control" type="text" name="room_price" value="">
    </div>

    <div class="form-group">
        <label for="code">Room Code</label>
        <input class="form-control" type="text" name="room_code" value="">
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Proses">
    </div>
</form>
@endsection
