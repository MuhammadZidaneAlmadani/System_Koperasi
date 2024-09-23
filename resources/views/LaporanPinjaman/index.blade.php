@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan Pinjaman</h1>
    <div class="mb-3 mt-2">
        {{-- <a href="{{ route('laporans.create') }}" class="btn btn-primary">Tambah Laporan</a> --}}
        <a href="{{ route('laporans.pdf') }}" class="btn btn-success">Cetak Laporan</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                {{-- <th>Pinjaman ID</th>
                <th>Detail Laporan</th>
                <th>Tindakan</th> --}}
                <th>Nama Member</th>
                <th>Jumlah</th>
                <th>Bunga</th>
                <th>Tenor</th>
                <th>Status Pinjaman</th>
                <th>Tanggal Pinjaman</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporans as $laporan)
                <tr>
                    <td>{{ $laporan->id }}</td>
                    <td>{{ $laporan->nama_member }}</td>
                    <td>{{ $laporan->jumlah }}</td>
                    <td>{{ $laporan->bunga }}</td>
                    <td>{{ $laporan->tenor }}</td>
                    <td>{{ $laporan->status_pinjaman }}</td>
                    <td>{{ $laporan->tanggal_pinjaman }}</td>
                    {{-- <td>{{ $laporan->pinjaman_id }}</td>
                    <td>{{ $laporan->detail_laporan }}</td>
                    <td>
                        <a href="{{ route('laporans.show', $laporan->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('laporans.edit', $laporan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laporans.destroy', $laporan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
