<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\typeroom;

class roomcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room=typeroom::all();
        return view('room',[
            'rooms'=>$room
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createroom',[
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        typeroom::create([
            'room_type'=>$request->room_type,
            'room_details'=>$request->room_details,
            'room_price'=>$request->room_price,
            'room_code'=>$request->room_code
        ]);
        return redirect(route('room.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $room = typeroom::where('room_code',$id)->get()->first();
        return view('showroom',[
            'room'=>$room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = typeroom::findOrFail($id);
        return view('editroom',[
            'room'=>$room
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $room = typeroom::findOrFail($id);
        $room->update([
            'room_type'=>$request->room_type,
            'room_details'=>$request->room_details,
            'room_price'=>$request->room_price,
            'room_code'=>$request->room_code
        ]);
        return redirect(route('room.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room=typeroom::findOrFail($id);
        $room->delete();
        return redirect(route('room.index'));
    }
}
