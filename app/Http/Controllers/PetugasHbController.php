<?php

namespace App\Http\Controllers;

use App\Models\PendonorModel;
use App\Models\PetugasHbModels;
use App\Models\PetugasModels;
use Illuminate\Http\Request;

class PetugasHbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Dokter=PetugasModels::all();
        $Pendonor=PendonorModel::all();

        $data=PetugasHbModels::all();

        return view('PetugasHB',compact('data','Dokter','Pendonor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        PetugasHbModels::create([
            'dokterId'=>$request->petugasId,
            'pendonorId'=>$request->pendonorId,
            'tensi'=>$request->tensi,
            'Hb'=>$request->Hb,
            'aftap'=>$request->aftap,
            'input'=>$request->input,
        ]);
        return redirect('PetugasHb');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PetugasHbModels::find($id);
        return redirect('PetugasHb',['data'=>$data]);
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
            PetugasHbModels::where(['id'=>$id])->update([
                'petugasId'=>$data['petugasId'],
                'pendonorId'=>$data['pendonorId'],
                'tensi'=>$data['tensi'],
                'Hb'=>$data['hb'],
                'aftapId'=>$data['aftapId'],
                'input'=>$data['input'],
            ]);
            return redirect('PetugasHb');
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
        $data=PetugasHbModels::find($id);
        $data->delete();
        return redirect('PetugasHb');
    }
}
