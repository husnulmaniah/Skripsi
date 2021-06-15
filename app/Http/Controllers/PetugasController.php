<?php

namespace App\Http\Controllers;

use App\Models\JabatanModels;
use App\Models\PendidikanModels;
use App\Models\PetugasModels;
use App\Models\StatusModels;
use App\Models\TenagaModel;
use App\Models\TpendidikanModels;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Jabatan=JabatanModels::all();
        $Tenaga=TenagaModel::all();
        $Pendidikan=PendidikanModels::all();
        $TingkatPend=TpendidikanModels::all();
        $StatusPeg=StatusModels::all();
        $data=PetugasModels::all();

        return view('Petugas',compact('data','Jabatan','Tenaga','Pendidikan','TingkatPend','StatusPeg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\PetugasModels::create([
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'tempatLahir'=>$request->tempatLahir,
            'tanggalLahir'=>$request->tanggalLahir,
            'ponsel'=>$request->ponsel,
            'jabatanId'=>$request->jabatanId,
            'tenagaId'=>$request->tenagaId,
            'pendidikanId'=>$request->pendidikanId,
            'tingkatPend_Id'=>$request->tingkatPend_Id,
            'statusPegawai_Id'=>$request->statusPegawai_Id
        ]);
        return redirect('Petugas');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PetugasModels::find($id);
        return redirect('Petugas',['data'=>$data]);
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
            PetugasModels::where(['id'=>$id])->update([
                'nama'=>$data['nama'],
                'alamat'=>$data['alamat'],
                'tempatLahir'=>$data['tempatLahir'],
                'tanggalLahir'=>$data['tanggalLahir'],
                'ponsel'=>$data['ponsel'],
                'jabatanId'=>$data['jabatanId'],
                'tenagaId'=>$data['tenagaId'],
                'pendidikanId'=>$data['pendidikanId'],
                'tingkatPend_Id'=>$data['tingkatPend_Id'],
                'statusPegawai_Id'=>$data['statusPegawai_Id']
            ]);
            return redirect('Petugas');
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
        $data=PetugasModels::find($id);
        $data->delete();
        return redirect('Petugas');
    }
}
