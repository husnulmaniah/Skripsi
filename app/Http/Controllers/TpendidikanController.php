<?php

namespace App\Http\Controllers;

use App\Models\TpendidikanModels;
use Illuminate\Http\Request;

class TpendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Tpend=TpendidikanModels::all();
        return view('Tpendidikan',compact('Tpend'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\TpendidikanModels::create([
            'tingkatPendidikan'=>$request->tingkatPendidikan
        ]);
        return redirect('Tpendidikan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Tpend=TpendidikanModels::find($id);
        return redirect('Tpendidikan',['Tpend'=>$Tpend]);
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
            $Tpend=$request->all();
            TpendidikanModels::where(['id'=>$id])->update([
                'tingkatPendidikan'=>$request['tingkatPendidikan']
            ]);
            return redirect('Tpendidikan');
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
        $Tpend=TpendidikanModels::find($id);
        $Tpend->delete();
        return redirect('Tpendidikan');
    }
}
