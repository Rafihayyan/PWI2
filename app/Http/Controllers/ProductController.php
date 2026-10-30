<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan halaman daftar produk
    public function getProduct()
    {
        $data = [
            'sName'    => 'Burgerian',
            'sAddress' => 'Jl. Jalan Terus',
            'sStatus'  => 'Sudah',
        ];

        return view('pages.product', $data);
    }

    // Menampilkan halaman tambah produk
    public function addProduct()
    {
        return view('pages.addProduct');
    }
}

