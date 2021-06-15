<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TenagaModel;

class TenagaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenaga=TenagaModel::all();
        return view('Tenaga',compact('tenaga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\TenagaModel::create([
            'tenaga'=>$request->tenaga
        ]);
        return redirect('Tenaga');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tenaga=TenagaModel::find($id);
        return redirect('Tenaga',['tenaga'=>$tenaga]);
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
            $tenaga=$request->all();
            TenagaModel::where(['id'=>$id])->update([
                'tenaga'=>$tenaga['tenaga']
            ]);
            return redirect('Tenaga');
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
        $tenaga=TenagaModel::find($id);
        $tenaga->delete();
        return redirect('Tenaga');
    }
}
