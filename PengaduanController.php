<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengaduanController extends Controller
{
    function index(){
        // echo "anjay";
           
           $pengaduan = DB::table('pengaduan')->get();
           return view('table', ['pengaduan' => $pengaduan]);
        }
    
    function isi_laporan(){
        // echo "maul";
        return view('isi_laporan');                                                                                                                                                                                                                    
    }    

    function home (){

        $judul = "Selamat Siang";

        return view('home', ['TextJudul' => $judul]);

        
    }

   
   


   

    
    

    function proses_tambah_pengaduan(Request $request){

        $request->validate([

            'isi_laporan' => 'required|min:5'
        ]);

        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => '123',
            'isi_laporan' => $isi_laporan,
            'foto' => '',
            'status' => '0'
        ]);

        return redirect('/table');
    }
    
}
