<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Pekerjaan::all();
        return view('Pekerjaan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\Pekerjaan::create([
            'pekerjaan'=>$request->pekerjaan
        ]);
        return redirect('Pekerjaan');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=Pekerjaan::find($id);
        return View('EditPekerjaan',['data'=>$data]);
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
            $data=$request->all();
            Pekerjaan::where(['id'=>$id])->update([
                'pekerjaan'=>$data['pekerjaan']
            ]);
            return redirect('Pekerjaan');
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
        $data=Pekerjaan::find($id);
        $data->delete();
        return redirect('Pekerjaan');
    }
}
