<?php

namespace App\Http\Controllers;

use App\Models\PendidikanModels;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pend=PendidikanModels::all();
        return view('Pendidikan',compact('pend'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\PendidikanModels::create([
            'pendidikan'=>$request->pendidikan
        ]);
        return redirect('Pendidikan');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pend=PendidikanModels::find($id);
        return redirect('Pendidikan',['pend'=>$pend]);
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
            $pend=$request->all();
            PendidikanModels::where(['id'=>$id])->update([
                'pendidikan'=>$pend['pendidikan']
            ]);
            return redirect('Pendidikan');
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
        $pend=PendidikanModels::find($id);
        $pend->delete();
        return redirect('Pendidikan');
    }
}
