@extends('layouts.app')

@section('content')
    <h1>Edit Angsuran</h1>

    <form action="{{ route('anggaran.update', $angsuran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_member">Nama Member</label>
            <input type="text" name="nama_member" class="form-control" id="nama_member" value="{{ $angsuran->nama_member }}" required>
        </div>

        <div class="form-group">
            <label for="jumlah_angsuran">Jumlah Angsuran</label>
            <input type="number" step="0.01" name="jumlah_angsuran" class="form-control" id="jumlah_angsuran" value="{{ $angsuran->jumlah_angsuran }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_angsuran">Tanggal Angsuran</label>
            <input type="date" name="tanggal_angsuran" class="form-control" id="tanggal_angsuran" value="{{ $angsuran->tanggal_angsuran }}" required>
        </div>

        <div class="form-group">
            <label for="nomor_angsuran">Nomor Angsuran</label>
            <input type="number" name="nomor_angsuran" class="form-control" id="nomor_angsuran" value="{{ $angsuran->nomor_angsuran }}" required>
        </div>

        <div class="form-group">
            <label for="status_angsuran">Status Angsuran</label>
            <select name="status_angsuran" id="status_angsuran" class="form-control" required>
                <option value="terbayar" {{ $angsuran->status_angsuran == 'terbayar' ? 'selected' : '' }}>Terbayar</option>
                <option value="tertunda" {{ $angsuran->status_angsuran == 'tertunda' ? 'selected' : '' }}>Tertunda</option>
            </select>
        </div>

        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" class="form-control" id="metode_pembayaran" value="{{ $angsuran->metode_pembayaran }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
