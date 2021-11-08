@extends('layout.mainlayout')
@section('title','List Tamu')
    
@section('main-content')
<div class="container mt-3">
    <a href="{{route('tamu.create')}}">
        <button type="submit" class="btn btn-primary mb-2">Add Tamu</button>
    </a>
</div>
<table class="table table-striped">
<tr>
    <th>No </th>
    {{-- <th>code </th> --}}
    <th>Name</th>
    <th>Check-in</th>
    <th>Check-out</th>
    <th>Type of room</th>
    <th>Action</th>
</tr>
@foreach ($tamus as $tamu)
<tr>
    <td>{{$loop->index+1}}</td>
    <td>{{$tamu['tamu_name']}}</td>
    <td>{{$tamu['tamu_checkin']}}</td>
    <td>{{$tamu['tamu_checkout']}}</td>
    <td>{{$tamu['tamu_typeroom']}}</td>
    <td>
        <div class="d-grid d-md-flex">
            <a href="{{route('tamu.show', $tamu['id'] )}}"><button type="button" class="btn btn-info me-md-2">Show</button></a>
            <a href="{{route('tamu.edit', $tamu['id'] )}}"><button type="button" class="btn btn-warning me-md-2">Edit</button></a>
            <form action="{{route('tamu.destroy', $tamu['id'] )}}" method="post">
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