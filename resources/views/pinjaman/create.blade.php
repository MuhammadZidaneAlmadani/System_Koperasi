@extends('layouts.app')

@section('content')
    <h1>Create Pinjaman</h1>
    <form action="{{ route('pinjamans.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_member">Nama Member:</label> <!-- Ganti User ID dengan Nama Member -->
            <input type="text" class="form-control" id="nama_member" name="nama_member" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" step="0.01" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <div class="form-group">
            <label for="bunga">Bunga:</label> <!-- Tambahkan kolom bunga -->
            <input type="number" step="0.01" class="form-control" id="bunga" name="bunga" required>
        </div>
        <div class="form-group">
            <label for="tenor">Tenor:</label> <!-- Tambahkan kolom tenor -->
            <input type="number" class="form-control" id="tenor" name="tenor" required>
        </div>
        <div class="form-group">
            <label for="status_pinjaman">Status Pinjaman:</label> <!-- Tambahkan kolom status pinjaman -->
            <select class="form-control" id="status_pinjaman" name="status_pinjaman" required>
                <option value="belum lunas">Belum Lunas</option>
                <option value="lunas">Lunas</option>
                <option value="dalam proses">Dalam Proses</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_pinjaman">Tanggal Pinjaman:</label>
            <input type="date" class="form-control" id="tanggal_pinjaman" name="tanggal_pinjaman" required>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
