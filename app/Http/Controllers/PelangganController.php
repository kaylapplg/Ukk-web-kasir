<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    function tampildatapelanggan(){
        $judul = "datapelanggan";
        $pelanggan = DB::table('pelanggan')->get();

        return view ('datapelanggan' , ['judul' => $judul, 'pelanggan' => $pelanggan]);
    }

    function tambah_pelanggan(){
        return view('tambahpelanggan');
        }  
    
        function deletepelanggan($id){
            $delete = DB::table('pelanggan')->where('PelangganID', $id)->delete();
            //if ($deleted){
                return redirect()->back();
            
        }
    
        function updatepelanggan($id){
            $pelanggan = DB::table('pelanggan')->where('PelangganID', $id)->first();
            return view ('updatepelanggan', ['pelanggan' => $pelanggan]);
        }
        
        function proses_updatepelanggan(Request $request, $id){
            $NamaPelanggan = $request->NamaPelanggan;
            $Alamat = $request->Alamat;
            $NomorTelepon = $request->NomorTelepon;
        
            DB::table('pelanggan')->where('PelangganID', $id)->update([
                'NamaPelanggan' => $NamaPelanggan,
                'Alamat' => $Alamat,
                'NomorTelepon' => $NomorTelepon,
                ]);
                return redirect('/datapelanggan');
        }

        function pelanggan(){
            $isi = "tambahpelanggan";
            return view('tambahpelanggan', ['isi' => $isi]);
        }

        function tambahpelanggan(Request $request){
            $tambahnamapelanggan = $request->NamaPelanggan;
            $tambahalamat = $request->Alamat;
            $tambahnomortelepon = $request->NomorTelepon;

            // return([$tambahpelanggan, $tambahalamat, $tambahnomortelepon]);

            DB::table('pelanggan')->insert ([
                'NamaPelanggan' => $tambahnamapelanggan,
                'Alamat' => $tambahalamat,
                'NomorTelepon' => $tambahnomortelepon,
            ]);
            return redirect('/datapelanggan');
        }

}
