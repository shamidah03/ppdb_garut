<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Mapel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiswaController extends Controller
{
    private $siswa;
    private $mapel;
    
        public function __construct(Siswa $siswa,Mapel $mapel)
        {
            $this->siswa = $siswa;
            $this->mapel = $mapel;
           
        
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = \app\siswa::All();
        return view('siswa.index',['siswa'=>$siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel =$this->mapel->getMapel();
        return view('siswa.create',compact('mapel'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $data =  new Siswa();
        $data->nama_lengkap = $request->nama_lengkap;
        $data->nama_panggilan = $request->nama_panggilan;
        $data->jk =$request->jk;
        $data->tanggal_lahir =$request->tanggal_lahir;
        $data->agama=$request->agama;
        $data->cita=$request->cita;
        $data->hobi=$request->hobi;
        $data->anak=$request->anak;
        $data->kandung=$request->kandung;
        $data->tiri=$request->tiri;
        $data->angkat=$request->angkat;
        $data->bb=$request->bb;
        $data->tb=$request->tb;
        $data->gd=$request->gd;
        $data->alamat_rumah=$request->alamat_rumah;
        $data->kelurahan=$request->kelurahan;
        $data->kecamatan=$request->kecamatan;
        $data->kabupaten=$request->kabupaten;
        $data->provinsi=$request->provinsi;
        $data->telp_rumah=$request->telp_rumah;
        $data->e_mail=$request->e_mail;
        $data->tinggal_dengan=$request->tinggal_dengan;
        $data->penyakit_derita=$request->penyakit_derita;
        $data->kelainan_jasmani=$request->kelainan_jasmani;
        // $data->id_mapel = $request->id_mapel;
        $data->save();
        return redirect('siswa/create')->with('sukses', 'Berhasil ditambahkan');
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
