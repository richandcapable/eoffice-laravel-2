<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Visi;
use App\Models\Misi;
use App\Models\Indikator;
use App\Models\IndikatorSasaran;
use App\Models\Tujuan;
use Illuminate\Http\Request;

class DetailSasaranController extends Controller
{
    public function show(){
        //get visis
        $visis = Visi::all()->where('id','1');
        $misi = Misi::all();
        $indikator = Indikator::all();
        $indikator_sasarans = IndikatorSasaran::all();
        $tujuan = Tujuan::all();
        return view('layouts/detailsasaran',compact('visis','misi','indikator','tujuan','indikator_sasarans'));
    }

    
}
