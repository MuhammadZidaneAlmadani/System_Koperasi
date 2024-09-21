@extends('layouts.app')

@section('content')
    <h1>Pinjaman Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $pinjaman->id }}</td>
        </tr>
        <tr>
            <th>Nama Member</th> <!-- Ganti User ID dengan Nama Member -->
            <td>{{ $pinjaman->nama_member }}</td>
        </tr>
        <tr>
            <th>Jumlah</th>
            <td>{{ $pinjaman->jumlah }}</td>
        </tr>
        <tr>
            <th>Bunga</th> <!-- Tambahkan kolom bunga -->
            <td>{{ $pinjaman->bunga }}</td>
        </tr>
        <tr>
            <th>Tenor</th> <!-- Tambahkan kolom tenor -->
            <td>{{ $pinjaman->tenor }}</td>
        </tr>
        <tr>
            <th>Status Pinjaman</th> <!-- Tambahkan kolom status pinjaman -->
            <td>{{ $pinjaman->status_pinjaman }}</td>
        </tr>
        <tr>
            <th>Tanggal Pinjaman</th>
            <td>{{ $pinjaman->tanggal_pinjaman }}</td>
        </tr>
    </table>
    <a href="{{ route('pinjamans.index') }}" class="btn btn-primary">Back to Pinjaman List</a>
@endsection
