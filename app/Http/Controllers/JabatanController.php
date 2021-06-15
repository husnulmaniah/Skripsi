<?php

namespace App\Http\Controllers;

use App\Models\JabatanModels;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabatan=JabatanModels::all();
        return view('Jabatan',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\JabatanModels::create([
            'jabatan'=>$request->jabatan
        ]);
        return redirect('Jabatan');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan=JabatanModels::find($id);
        return redirect('EditJabatan',['jabatan'=>$jabatan]);
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
            $jabatan=$request->all();
            JabatanModels::where(['id'=>$id])->update([
                'jabatan'=>$jabatan['jabatan']
            ]);
            return redirect('Jabatan');
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
        $jabatan=JabatanModels::find($id);
        $jabatan->delete();
        return redirect('Jabatan');
    }
}
