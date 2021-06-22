<?php

namespace App\Http\Controllers;

use App\Models\DataPendonorModels;
use App\Models\PendonorModel;
use App\Models\PetugasAftapModel;
use App\Models\PetugasHbModels;
use App\Models\PetugasModels;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Arr;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pendonor=PendonorModel::all();
        $Petugas=PetugasAftapModel::all();
        $PetugasPengisi=PetugasHbModels::all();
        $data=DataPendonorModels::all();

        return view('Data',compact('data','Pendonor','PetugasPengisi','Petugas'));
    }
    // public function print()
    // {
    //     $Pendonor=PendonorModel::get();
    //     $Petugas=PetugasAftapModel::get();
    //     $PetugasPengisi=PetugasHbModels::get();
    //     $data=DataPendonorModels::get();

    //     return view('DataPDF',compact('data','Pendonor','PetugasPengisi','Petugas'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\DataPendonorModels::create([
            'noTrans'=>$request->noTrans,
            'pendonorId'=>$request->pendonorId,
            'petugasaftapsId'=>$request->petugasaftapsId,
            'petugasPengisiId'=>$request->petugasPengisiId
        ]);
        return redirect('Data');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function print()
    {
        $Pendonor=PendonorModel::all();
        $Petugas=PetugasAftapModel::all();
        $PetugasPengisi=PetugasHbModels::all();
        $data=DataPendonorModels::all();

        $pdf = PDF::loadview('Datalaporan',[
            'Pendonor'=>$Pendonor, 'Petugas'=>$Petugas, 'PetugasPengisi'=>$PetugasPengisi, 'data'=>$data
            ])->setPaper('F4','landscape');
        return $pdf->stream('Laporan-Pendonor-Sukarela-pdf');
    }
}
