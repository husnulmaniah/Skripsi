<?php

namespace App\Http\Controllers;

use App\Models\PendonorModel;
use App\Models\PesanModel;
use App\Models\SentPesanModel;
use Carbon\Carbon;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesan=PesanModel::all();
        $contact=PendonorModel::all();
        $data=SentPesanModel::all();
        return View('SentPesan', compact('data','pesan','contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $pesans=PesanModel::where("id",$request->input('pesanId'))->value('pesan');
        $contak=PendonorModel::where("id",$request->input('contakId'))->value('ponsel');
        $my_date=carbon::now();
        $response = Http::post('http://localhost:8081/ex/v1/notification',[
            'channel' => 'whatsapp',
            'souce' => 'biz-otoraja',
            'payload' => [
                'to' => $contak,
                'is_shm' => true,
                'text' => $pesans
            ],
            'template_name'=>'otoraja_questionnaire_thank_you'
        ])->json();
        $data= array(
            'pesanId'=>$request->input('pesanId'),
            'contakId'=>$request->input('contakId'),
            'next_msg'=>$my_date->addDays(60)->format("y-m-d")
        );
        DB::table('sent_mes')->insert($data);
        // return dd($response);
        // return view('PesanSuccess',$response);
        return view('SentPesan',$response);
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
}
