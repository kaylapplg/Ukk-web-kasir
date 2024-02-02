<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    function penjualan(){
        $produk = DB::table('produk')->get();
        $pelanggan = DB::table('pelanggan')->get();
 
        $penjualan = DB::table("penjualan")->latest()->first();
 
        $idPenjualan = "";
 
        if(!$penjualan){ // kalau tidak ada Penjualan
            $idPenjualan = '1';
        }else{
         $idPenjualan = $penjualan->PenjualanID;
 
         if($penjualan->status == "selesai"){
             $idPenjualan = $penjualan->PenjualanID + 1;
         }else{
             $idPenjualan = $penjualan->PenjualanID;
         }
        }
 
        $detailPenjualan = DB::table("detailpejualan")->where("PenjualanID", $idPenjualan)
        ->join("produk", "detailpejualan.ProdukID", "=", "produk.ProdukID")
        ->get();
        //return $detailpenjualan
 
        return view("penjualan", ['idPenjualan'=> $idPenjualan,'detailpejualan'=> $detailPenjualan, 'produk' => $produk, 'pelanggan' => $pelanggan]);
     }
 
     function store(request $request){

     $produk = DB::table('produk')->where('ProdukID', $request->produk)->first();
     //return produk
     $Datapenjualan = DB::table('penjualan')->where('PenjualanID', $request->idPenjualan)->first();
     if(!$Datapenjualan){ //kalau tidak ada penjualan
 
         $penjualan = DB::table("penjualan")->insert([
             'PenjualanID' => $request->idPenjualan,
             'TanggalPenjualan' => date("Y-m-d"),
             'TotalHarga' => 0,
             'PelangganID' => $request->pelanggan,
             'status' => "pending"
         ]);
}
         if($produk-> Stok - $request->qty < 0){
            return redirect()->back()->with("info", "Stok Tidak Mencukupi");
        }else{
        
        
         $detailPenjualan = DB::table("detailpejualan")->insert([
             'PenjualanID' => $request->idPenjualan,
             'ProdukID' => $request->produk,
             'JumlahProduk' => $request->qty,
             'SubTotal' => $request->qty * $produk->Harga
         ]);

         //update stok produk
         DB::table("produk")->where('ProdukID', $request->produk)->update(['stok' => $produk->Stok - $request->qty]);
         
         return redirect()->back();
     }
    }
    
    function checkout(Request $request){
        $updateData = DB::table("penjualan")->where("PenjualanID", $request->idPenjualan)->update([
            'status' => "selesai",
            'TotalHarga' => $request->totalHarga
        ]);
        if($updateData){
            return redirect()->back()->with("info", "penjualan telah berhasil");
        }
    }
    function detailpenjualan($id){
        $penjualan = DB::table('penjualan')->where('PenjualanID', $id)->get();
        $detailPenjualan = DB::table('detailpejualan')->where('PenjualanID', $id)
        ->join('produk', 'detailpejualan.ProdukID', '=', 'produk.ProdukID')
        ->get();

        return $detailPenjualan;
    }

    function tampilpenjualan(){
        $judul = "datapenjualan";
        $penjualan = DB::table('penjualan')
        ->join('pelanggan', 'penjualan.PenjualanID', '=', 'pelanggan.PelangganID')->get();

        return view ('datapenjualan' , ['judul' => $judul, 'penjualan' => $penjualan]);
    }
}
