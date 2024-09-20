@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="mb-3 text-center">Welcome to the Dashboard</h1>

    <!-- Row untuk menampilkan kartu informasi -->
    <div class="row">
        <!-- Anggota -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/users') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-users fa-2x text-danger"></i> <!-- Icon anggota -->
                            <h5 class="card-title mt-2">MANAJEMEN PENGGUNA</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Item Produk -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/members') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-box fa-2x text-success"></i> <!-- Icon produk -->
                            <h5 class="card-title mt-2">DATA MEMBER</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        

        <!-- Tabungan Saldo -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/pinjaman') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-wallet fa-2x text-info"></i> <!-- Icon saldo -->
                            <h5 class="card-title mt-2">PINJAMAN</h5>
                            <p class="card-text">Rp {{ number_format($data['pinjaman'], 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        

        <!-- Tabungan Debit -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/angsuran') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-money-bill-wave fa-2x text-warning"></i> <!-- Icon debit -->
                            <h5 class="card-title mt-2">ANGSURAN</h5>
                            <p class="card-text">Rp {{ number_format($data['angsuran'], 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <!-- Row kedua -->
    <div class="row">
        <!-- Tabungan Kredit -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/perjanjian') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-credit-card fa-2x text-primary"></i> <!-- Icon kredit -->
                            <h5 class="card-title mt-2">PERJANJIAN PINJAMAN</h5>
                            <p class="card-text">Rp {{ number_format($data['perjanjian pinjaman'], 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Transaksi Kredit -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/laporans') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-exchange-alt fa-2x text-success"></i> <!-- Icon transaksi kredit -->
                            <h5 class="card-title mt-2">LAPORAN PINJAMAN</h5>
                            <p class="card-text">{{ $data['laporan pinjaman'] }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Uang Kredit: Biaya Admin -->
        <div class="col-md-3 mb-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <a href="{{ url('/laporanA') }}" class="nav-link">
                        <div class="card-body">
                            <i class="fas fa-cog fa-2x text-secondary"></i> <!-- Icon biaya admin -->
                            <h5 class="card-title mt-2">LAPORAN ANGSURAN</h5>
                            <p class="card-text">Rp {{ number_format($data['laporan angsuran'], 0, ',', '.') }}</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    <!-- Grafik -->
    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <canvas id="logEntryTransactionChart"></canvas> <!-- Grafik ditampilkan di sini -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel -->
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Peminjaman</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Postdate</th>
                                <th>Anggota</th>
                                <th>Nominal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-10-17 10:29:08</td>
                                <td>KASEP</td>
                                <td>Rp 250.000,00</td>
                            </tr>
                            <tr>
                                <td>2023-03-09 10:29:48</td>
                                <td>coba1</td>
                                <td>Rp 1.000.000,00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Anggota Baru</div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Postdate</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-10-17 10:28:35</td>
                                <td>BAMBANG</td>
                                <td>SISWA</td>
                                <td>8989678768</td>
                            </tr>
                            <tr>
                                <td>2023-10-17 10:28:16</td>
                                <td>KASEP</td>
                                <td>SISWA</td>
                                <td>0908787878789</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Script Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('logEntryTransactionChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['20231017', '20231016', '20231015', '20231014', '20231013', '20231012', '20231011', '20231010', '20231009', '20231008', '20231007', '20231006'],
                datasets: [
                    {
                        label: 'Login',
                        data: [50, 45, 60, 80, 100, 150, 200, 80, 70, 65, 60, 55],
                        borderColor: 'blue',
                        fill: false,
                    },
                    {
                        label: 'Entri',
                        data: [100, 90, 110, 150, 160, 180, 200, 120, 110, 100, 90, 80],
                        borderColor: 'orange',
                        fill: false,
                    },
                    {
                        label: 'Transaksi',
                        data: [20, 25, 40, 60, 80, 100, 120, 80, 60, 40, 20, 10],
                        borderColor: 'green',
                        fill: false,
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Tanggal'
                        }
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Jumlah'
                        }
                    }
                }
            }
        });
    </script>
</div>
@endsection
