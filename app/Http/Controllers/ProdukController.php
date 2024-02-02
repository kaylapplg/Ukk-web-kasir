<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    function tampilproduk(){
        $judul = "dataproduk";
        $produk = DB::table('produk')->get();

        return view ('dataproduk' , ['judul' => $judul, 'produk' => $produk]);
    }
    
    function deleteproduk($id){
        $delete = DB::table('produk')->where('ProdukID', $id)->delete();
        //if ($deleted){
            return redirect()->back();
        
    }

    function updateproduk($id){
        $produk = DB::table('produk')->where('ProdukID', $id)->first();
        return view ('updateproduk', ['produk' => $produk]);
    }
    
    function proses_updateproduk(Request $request, $id){
        $NamaProduk = $request->NamaProduk;
        $Harga = $request->Harga;
        $Stok = $request->Stok;
    
        DB::table('produk')->where('ProdukID', $id)->update([
            'NamaProduk' => $NamaProduk,
            'Harga' => $Harga,
            'Stok' => $Stok,
            ]);
            return redirect('/tampildataproduk');
    }

    function produk(){
        $isi ="tambahproduk";
        return view('tambahproduk', ['isi' => $isi]);
    }

    function tambahproduk(Request $request){
        $tambahproduk = $request->NamaProduk;
        $tambahharga = $request->Harga;
        $tambahstok = $request->Stok;

        // return([$tambahproduk, tambahharga, tambahstok]);

        DB::table('produk')->insert([
            'NamaProduk' => $tambahproduk,
            'Harga' => $tambahharga,
            'Stok' => $tambahstok,
        ]);

            return redirect('/tampildataproduk');
    }
}
