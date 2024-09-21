@extends('layouts.app')

@section('content')
    <h1>Daftar Perjanjian Pinjaman</h1>
    <div class="mb-3 mt-2">
        <a href="{{ route('perjanjian.create') }}" class="btn btn-primary">Tambah Perjanjian</a>
        <a href="{{ route('perjanjian.pdf') }}" class="mx-3 btn btn-success">Cetak PDF</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pinjaman ID</th>
                <th>Detail Perjanjian</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perjanjians as $perjanjian)
                <tr>
                    <td>{{ $perjanjian->id }}</td>
                    <td>{{ $perjanjian->pinjaman_id }}</td>
                    <td>{{ $perjanjian->detail_perjanjian }}</td>
                    <td>
                        <!-- Perbaiki route untuk tombol detail -->
                        <a href="{{ route('perjanjian.show', $perjanjian->id) }}" class="btn btn-info">Detail</a>
                        <!-- Perbaiki route untuk tombol edit -->
                        <a href="{{ route('perjanjian.edit', $perjanjian->id) }}" class="btn btn-warning">Edit</a>
                        <!-- Perbaiki form untuk delete -->
                        <form action="{{ route('perjanjian.destroy', $perjanjian->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
