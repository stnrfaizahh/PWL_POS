<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    //
    public function index(){
        $data=[
            'kategori_kode'=>'SNK',
            'kategori_nama'=>'Snack/makanan ringan',
            'created_at'=>now()
        ];
        DB::table('m_kategori')->insert($data);
        //DB::table('m_kategori')->insert($data);
        return 'data berhasil ditambah';
    }
}
