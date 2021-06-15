<?php

namespace App\Http\Controllers;

use App\Models\PendonorModel;
use App\Models\PetugasAftapModel;
use Illuminate\Http\Request;

class AftapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendonor=PendonorModel::all();
        $aftaps=PetugasAftapModel::all();
        return view('Aftap',compact('aftaps','pendonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Models\PetugasAftapModel::create([
            'pendonorId'=>$request->pendonorId,
            'jenis'=>$request->jenis,
            'noKantong'=>$request->noKantong,
            'pengesahan'=>$request->pengesahan,
            'jamAftap'=>$request->jamAftap,
            'status'=>$request->status,
            'cc'=>$request->cc,
            'shift'=>$request->shift,
            'dgmu'=>$request->dgmu,
            'instansi'=>$request->instansi,
            'Metode'=>$request->metode,
            'macamDonor'=>$request->macamDonor
        ]);
        return redirect('PetugasAftap');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PetugasAftapModel::find($id);
        return redirect('EditAftap',['data'=>$data]);
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
            $aftap=$request->all();
            PetugasAftapModel::where(['id'=>$id])->update([
                'pendonorId'=>$aftap['pendonorId'],
                'jenis'=>$aftap['jenis'],
                'noKantong'=>$aftap['noKantong'],
                'pengesahan'=>$aftap['pengesahan'],
                'jamAftap'=>$aftap['jamAftap'],
                'status'=>$aftap['status'],
                'cc'=>$aftap['cc'],
                'shift'=>$aftap['shift'],
                'dgmu'=>$aftap['dgmu'],
                'instansi'=>$aftap['instansi'],
                'Metode'=>$aftap['metode'],
                'macamDonor'=>$aftap['macamDonor']
            ]);
            return redirect('PetugasAftap');
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
        $data=PetugasAftapModel::find($id);
        $data->delete();
        return redirect('PetugasAftap');
    }
}
