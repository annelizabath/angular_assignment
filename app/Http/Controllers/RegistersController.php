<?php

namespace App\Http\Controllers;

use App\registers;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registersdetails=registers::all();
        return view('registers.view', compact('registersdetails'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reg=new registers([
            'name'=>$request->get('name'),
            'college'=>$request->get('college'),
            'qualification'=>$request->get('qualification'),
            'place'=>$request->get('place')
        ]);
        $reg->save();
        return redirect('/registers/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\registers  $registers
     * @return \Illuminate\Http\Response
     */
    public function show(registers $registers)
    {
        return view('registers.register');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\registers  $registers
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registers= registers::find($id);
        return view('registers.edit',compact('registers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registers  $registers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $registers=registers::find($id);
        $registers->name=$request->get('name');
        $registers->college=$request->get('college');
        $registers->qualification=$request->get('qualification');
        $registers->place=$request->get('place');
        $registers->save();
        return redirect('/registers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registers  $registers
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registers=registers::find($id);
        $registers->delete();
        return redirect('/registers');
    }
}
