@extends('layouts.app')

@section('content')
    <h1>Detail Angsuran</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $angsuran->id }}</td>
        </tr>
        <tr>
            <th>Nama Member</th>
            <td>{{ $angsuran->nama_member }}</td>
        </tr>
        <tr>
            <th>Jumlah Angsuran</th>
            <td>{{ $angsuran->jumlah_angsuran }}</td>
        </tr>
        <tr>
            <th>Tanggal Angsuran</th>
            <td>{{ $angsuran->tanggal_angsuran }}</td>
        </tr>
        <tr>
            <th>Nomor Angsuran</th>
            <td>{{ $angsuran->nomor_angsuran }}</td>
        </tr>
        <tr>
            <th>Status Angsuran</th>
            <td>{{ $angsuran->status_angsuran }}</td>
        </tr>
        <tr>
            <th>Metode Pembayaran</th>
            <td>{{ $angsuran->metode_pembayaran }}</td>
        </tr>
        <tr>
            <th>Created At</th>
            <td>{{ $angsuran->created_at }}</td>
        </tr>
        <tr>
            <th>Updated At</th>
            <td>{{ $angsuran->updated_at }}</td>
        </tr>
    </table>

    <a href="{{ route('anggaran.index') }}" class="btn btn-primary">Kembali ke Daftar Angsuran</a>
@endsection
