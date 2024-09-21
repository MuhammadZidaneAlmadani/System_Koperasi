@extends('layouts.app')

@section('content')
    <h1>Edit Pinjaman</h1>
    <form action="{{ route('pinjamans.update', $pinjaman->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_member">Nama Member:</label> <!-- Ganti User ID dengan Nama Member -->
            <input type="text" class="form-control" id="nama_member" name="nama_member" value="{{ $pinjaman->nama_member }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah:</label>
            <input type="number" step="0.01" class="form-control" id="jumlah" name="jumlah" value="{{ $pinjaman->jumlah }}" required>
        </div>
        <div class="form-group">
            <label for="bunga">Bunga:</label> <!-- Tambahkan kolom bunga -->
            <input type="number" step="0.01" class="form-control" id="bunga" name="bunga" value="{{ $pinjaman->bunga }}" required>
        </div>
        <div class="form-group">
            <label for="tenor">Tenor:</label> <!-- Tambahkan kolom tenor -->
            <input type="number" class="form-control" id="tenor" name="tenor" value="{{ $pinjaman->tenor }}" required>
        </div>
        <div class="form-group">
            <label for="status_pinjaman">Status Pinjaman:</label> <!-- Tambahkan kolom status pinjaman -->
            <select class="form-control" id="status_pinjaman" name="status_pinjaman" required>
                <option value="belum lunas" {{ $pinjaman->status_pinjaman == 'belum lunas' ? 'selected' : '' }}>Belum Lunas</option>
                <option value="lunas" {{ $pinjaman->status_pinjaman == 'lunas' ? 'selected' : '' }}>Lunas</option>
                <option value="dalam proses" {{ $pinjaman->status_pinjaman == 'dalam proses' ? 'selected' : '' }}>Dalam Proses</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_pinjaman">Tanggal Pinjaman:</label>
            <input type="date" class="form-control" id="tanggal_pinjaman" name="tanggal_pinjaman" value="{{ $pinjaman->tanggal_pinjaman }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pinjamans.index')}}" class="btn btn-secondary">Back</a>
    </form>
@endsection
