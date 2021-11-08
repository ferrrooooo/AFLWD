@extends('layout.mainlayout')
@section('title','Type Room')

@section('main-content')
<div class="container mt-3">
    <a href="{{route('room.create')}}">
        <button type="submit" class="btn btn-primary mb-2">Add room</button>
    </a>
</div>
<table class="table table-striped">
<tr>
    <th>No </th>
    {{-- <th>code </th> --}}
    <th>Room Type</th>
    <th>Details</th>
    <th>Price</th>
    <th>Code</th>
    <th>Action</th>
</tr>
@foreach ($rooms as $room)
<tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$room['room_type']}}</td>
    <td>{{$room['room_details']}}</td>
    <td>{{$room['room_price']}}</td>
    <td>{{$room['room_code']}}</td>
    <td>
        <div class="d-grid d-md-flex">
            <a href="{{route('room.show', $room['room_code'] )}}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
            <a href="{{route('room.edit', $room['room_code'] )}}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
            <form action="{{route('room.destroy', $room['room_code'] )}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </td>
</tr>
    
@endforeach
</table>
@endsection
    
