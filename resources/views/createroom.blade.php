@extends('layout.mainlayout')
@section('title','Create Kamar')

@section('main-content')
<form action="{{route('room.store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nama">Room Type</label>
        <input class="form-control" type="text" name="room_type" value="">
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
