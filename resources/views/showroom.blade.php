@extends('layout.mainlayout')
@section('title','Show Tamu')

@section('main-content')

    <div class="mt-9 p-5 bg-primary text-white rounded">

        <h1>{{$room['title']}}</h1>
        <p>Roomm Type: {{$room['room_type']}}</p>
        <p>Details: {{$room['room_details']}}</p>
        <p>Price: {{$room['room_price']}}</p>
        <p>Room Code: {{$room['room_code']}}</p>
    </div>
    
@endsection