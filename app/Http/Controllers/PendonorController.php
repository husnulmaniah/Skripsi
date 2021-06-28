<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Models\PendonorModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataP=Pekerjaan::all();
        $data=PendonorModel::all();
        return view('Pendonor',compact('data'),compact('dataP'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\PendonorModel::create([
            'noId'=>$request->noId,
            'nama'=>$request->nama,
            'ponsel'=>$request->ponsel,
            'email'=>$request->email,
            'noKartu'=>$request->noKartu,
            'jk'=>$request->jk,
            'alamat'=>$request->alamat,
            'Kecamatan'=>$request->kecamatan,
            'Kota'=>$request->kota,
            'pekerjaan_id'=>$request->pekerjaan_id,
            'tempatLahir'=>$request->tempatLahir,
            'TanggalLahir'=>$request->tanggalLahir,
            'penghargaan'=>$request->penghargaan,
            'gol'=>$request->gol,
            'resus'=>$request->resus,
            'dsdp'=>$request->dsdp,
            'baru'=>$request->baru,
            'donorTerakhir'=>$request->donorTerakhir,
            'donorKe'=>$request->donorKe,
            'jam'=>$request->jam
        ]);
        return redirect('Pendonor');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PendonorModel::find($id);
        return redirect('Pendonor',['data'=>$data]);
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
            PendonorModel::where(['id'=>$id])->update([
                'noId'=>$data['noId'],
                'nama'=>$data['nama'],
                'ponsel'=>$data['ponsel'],
                'email'=>$data['email'],
                'noKartu'=>$data['noKartu'],
                'jk'=>$data['jk'],
                'alamat'=>$data['alamat'],
                'kecamatan'=>$data['kecamatan'],
                'kota'=>$data['kota'],
                'pekerjaan_id'=>$data['pekerjaan_id'],
                'tempatLahir'=>$data['tempatLahir'],
                'tanggalLahir'=>$data['tanggalLahir'],
                'penghargaan'=>$data['penghargaan'],
                'gol'=>$data['gol'],
                'resus'=>$data['resus'],
                'dsdp'=>$data['dsdp'],
                'baru'=>$data['baru'],
                'donorTerakhir'=>$data['donorTerakhir'],
                'donorKe'=>$data['donorKe'],
                'jam'=>$data['jam']
            ]);
            return redirect('Pendonor');
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
        $data=PendonorModel::find($id);
        $data->delete();
        return redirect('Pendonor');
    }

    public function print()
    {
        $dataP=Pekerjaan::all();
        $data=PendonorModel::all();
        // return view('Pendonor',compact('data'),compact('dataP'));
        $pdf= PDF::loadview('LaporanPendonor',compact('data','dataP'))->setPaper('A3','landscape');
        return $pdf->stream('Laporan-Pendonor-pdf');
    }
}
