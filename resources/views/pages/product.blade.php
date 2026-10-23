//product.blade.php

@extends('layouts.master')

@section('content')
    <h2>Daftar Product</h2>
    <button type="button" class="btn btn-warning">
        Tambah Data
    </button>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Produk 1</td>
                <td>1000</td>
                <td>10</td>
                <td>
                    <button type="button" class="btn btn-success">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Hapus
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Produk 2</td>
                <td>2000</td>
                <td>20</td>
                <td>
                    <button type="button" class="btn btn-success">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Hapus
                    </button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Produk 3</td>
                <td>3000</td>
                <td>30</td>
                <td>
                    <button type="button" class="btn btn-success">
                        Edit
                    </button>
                    <button type="button" class="btn btn-danger">
                        Hapus
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
    
@endsection
