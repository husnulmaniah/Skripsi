<?php

namespace App\Http\Controllers;

use App\Models\PesanModel;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class IsiPesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PesanModel::all();
        return View('Pesan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\PesanModel::create([
            'pesan'=>$request->pesan
        ]);
        return redirect('Pesan');
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
        $data=PesanModel::find($id);
        return redirect('EditPesan',['data'=>$data]);
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
        if ($request->isMethod('post')){
            $pesan=$request->all();
            PesanModel::where(['id'=>$id])->update([
                'pesan'=>$pesan['pesan']
            ]);
            return redirect('Pesan');
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
        $pesan=PesanModel::find($id);
        $pesan->delete();
        return redirect('Pesan');
    }
}
