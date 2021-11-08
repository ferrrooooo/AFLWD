@extends('layout.mainlayout')
@section('title','Show Tamu')

@section('main-content')

    <div class="mt-9 p-5 bg-primary text-white rounded">

        <h1>{{$tamu['title']}}</h1>
        <p>Nama: {{$tamu['tamu_name']}}</p>
        <p>Check-In: {{$tamu['tamu_checkin']}}</p>
        <p>Check-Out: {{$tamu['tamu_checkout']}}</p>
        <p>Type Room: {{$tamu['tamu_typeroom']}}</p>
    </div>
    
@endsection