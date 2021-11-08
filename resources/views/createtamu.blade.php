@extends('layout.mainlayout')
@section('title','Create Tamu')

@section('main-content')
<form action="{{route('tamu.store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="nama">Name</label>
        <input class="form-control" type="text" name="tamu_name" value="">
    </div>

    <div class="form-group">
        <label for="checkin">Check In</label>
        <input class="form-control" type="date" name="tamu_checkin" value="">
    </div>

    <div class="form-group">
        <label for="checkout">Check Out</label>
        <input class="form-control" type="date" name="tamu_checkout" value="">
    </div>

    <div class="form-group">
        <label for="typeroom">Type Room</label>
        <select name="tamu_typeroom" class="form-control">
            <option value="" selected disabled hidden>choose</option>
            @foreach ($room as $room)
                <option value="{{$room['room_code']}}">{{$room['room_type']}}</option>
                
            @endforeach
        </select>
        {{-- <input class="form-control" type="text" name="tamu_typeroom" value=""> --}}

    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Proses">
    </div>
</form>
@endsection
