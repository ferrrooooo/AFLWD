<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tamu;
use App\Models\typeroom;


class tamucontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tamu=tamu::all();
        return view('tamu',[
            'tamus'=>$tamu
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room=typeroom::all();
        return view('createtamu',[
            'room'=>$room
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
        tamu::create([
            'tamu_name'=>$request->tamu_name,
            'tamu_checkin'=>$request->tamu_checkin,
            'tamu_checkout'=>$request->tamu_checkout,
            'tamu_typeroom'=>$request->tamu_typeroom
        ]);
        return redirect(route('tamu.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tamu = tamu::where('id',$id)->get()->first();
        return view('showtamu',[
            'tamu'=>$tamu
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
        $tamu = tamu::findOrFail($id);
        return view('edittamu',[
            'tamu'=>$tamu
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
        $tamu = tamu::findOrFail($id);
        $tamu->update([
            'tamu_name'=>$request->tamu_name,
            'tamu_checkin'=>$request->tamu_checkin,
            'tamu_checkout'=>$request->tamu_checkout,
            'tamu_typeroom'=>$request->tamu_typeroom
        ]);
        return redirect(route('tamu.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tamu=tamu::findOrFail($id);
        $tamu->delete();
        return redirect(route('tamu.index'));
    }
}
