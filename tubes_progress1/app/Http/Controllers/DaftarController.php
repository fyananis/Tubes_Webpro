<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\PasienLama;
class DaftarController extends Controller
{
    //
    function  index()
    {
        return view('daftar.daftar');
     }
     function pasienBaru()
     {
        return view('daftar.daftarBaru');
     }
     function storePasienBaru(Request $request)
    {   
        $datas = $request->all();
        $datas = Daftar::create($datas);
        return redirect('/antrian');
        // return $datas;
        // dd($request->all());
     }

     function pasienLama(){
        return view('daftar.pasienLama');   
     }
     function pasienLamaStore(Request $request)
     {
        $datas = $request->all();
        $datas = PasienLama::create($datas);
        return redirect('/antrian');
     }
     function antrian()
     {
        return view('daftar.nomerAntrian');
     }
     
}
