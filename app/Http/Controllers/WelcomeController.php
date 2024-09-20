<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $breadcrumb = (object)[
            'title'=> 'Sistem Koperasi',
            'list'=>['Home', 'Dashboard']
        ];
        $activeMenu = 'dashboard';
        
        // Simulasi data dari gambar
        $data = [
            'manajemen pengguna' => 2,
            'data member' => 2,
            'pinjaman' => 375000,
            'angsuran' => 450000,
            'perjanjian pinjaman' => 75000,
            'laporan pinjaman' => 2,
            'laporan angsuran' => 28000,
        ];
        
        return view('dashboard', ['breadcrumb' => $breadcrumb, 'activeMenu' => $activeMenu, 'data' => $data]);
    }
}
