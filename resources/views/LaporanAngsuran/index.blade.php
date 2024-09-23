@extends('layouts.app')

@section('content')
    <h1>Daftar Laporan Angsuran</h1>
    <div class="mb-3 mt-2">
        {{-- <a href="{{ route('laporanA.create') }}" class="btn btn-primary">Tambah Laporan</a> --}}
        <a href="{{ route('laporanA.pdf') }}" class="btn btn-success">Cetak Laporan</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Member</th>
                <th>Jumlah Angsuran</th>
                <th>Tanggal Angsuran</th>
                <th>Status Angsuran</th>
                <th>Metode Pembayaran</th>
                {{-- <th>Angsuran ID</th>
                <th>Detail Laporan</th>
                <th>Tindakan</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanAs as $laporanA)
                <tr>
                    <td>{{ $laporanA->id }}</td>
                    <td>{{ $laporanA->nama_member }}</td>
                    <td>{{ $laporanA->jumlah_angsuran }}</td>
                    <td>{{ $laporanA->tanggal_angsuran }}</td>
                    <td>{{ $laporanA->status_angsuran }}</td>
                    <td>{{ $laporanA->metode_pembayaran }}</td>
                    {{-- <td>{{ $laporanA->angsuran_id }}</td>
                    <td>{{ $laporanA->detail_laporan }}</td>
                    <td>
                        <a href="{{ route('laporanA.show', $laporanA->id) }}" class="btn btn-info">Detail</a>
                        <a href="{{ route('laporanA.edit', $laporanA->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('laporanA.destroy', $laporanA->id) }}" method="POST" style="display:inline;">
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
