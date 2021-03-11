<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('index');
    }
    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }
    public function services(){
        return view('services');
    }
    public function barang(){
        $barang = DB::table('barang')->paginate(2);
        return view('barang',['barang'=>$barang]);
    }
    public function pelanggan(){
        $pelanggan = DB::table('pelanggan')->paginate(2);
        return view('pelanggan',['pelanggan'=>$pelanggan]);
    }
    public function pegawai(){
        $pegawai = DB::table('pegawai')->paginate(2);
        return view('pegawai',['pegawai'=>$pegawai]);
    }
    public function supplier(){
        $supplier = DB::table('supplier')->paginate(2);
        return view('supplier',['supplier'=>$supplier]);
    }
}