<?php

namespace App\Http\Controllers;

use App\Models\StatusModels;
use Illuminate\Http\Request;

class StatusPegController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $StatPeg=StatusModels::all();
        return view('Status',compact('StatPeg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\StatusModels::create([
            'statusPegawai'=>$request->statusPegawai
        ]);
        return redirect('Status');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $StatPeg=StatusModels::find($id);
        return redirect('StatusPegawai',['StatPeg'=>$StatPeg]);
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
        if ($request->isMethod('post')) {
            $StatPeg=$request->all();
            StatusModels::where(['id'=>$id])->update([
                'statusPegawai'=>$StatPeg['statusPegawai']
            ]);
            return redirect('Status');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $StatPeg=StatusModels::find($id);
        $StatPeg->delete();
        return redirect('Status');
    }
}
