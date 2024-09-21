@extends('layouts.app')

@section('content')
    <h1>Pinjaman List</h1>
    <a href="{{ route('pinjamans.create') }}" class="btn btn-primary">Create New Pinjaman</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Member</th> <!-- Ganti User ID dengan Nama Member -->
                <th>Jumlah</th>
                <th>Bunga</th> <!-- Tambahkan kolom bunga -->
                <th>Tenor</th> <!-- Tambahkan kolom tenor -->
                <th>Status Pinjaman</th> <!-- Tambahkan kolom status pinjaman -->
                <th>Tanggal Pinjaman</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pinjamans as $pinjaman)
                <tr>
                    <td>{{ $pinjaman->id }}</td>
                    <td>{{ $pinjaman->nama_member }}</td> <!-- Menggunakan nama_member -->
                    <td>{{ $pinjaman->jumlah }}</td>
                    <td>{{ $pinjaman->bunga }}</td> <!-- Menampilkan bunga -->
                    <td>{{ $pinjaman->tenor }}</td> <!-- Menampilkan tenor -->
                    <td>{{ $pinjaman->status_pinjaman }}</td> <!-- Menampilkan status pinjaman -->
                    <td>{{ $pinjaman->tanggal_pinjaman }}</td>
                    <td>
                        <a href="{{ route('pinjamans.show', $pinjaman->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('pinjamans.edit', $pinjaman->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pinjamans.destroy', $pinjaman->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
