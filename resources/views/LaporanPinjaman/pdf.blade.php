<!DOCTYPE html>
<html>
<head>
    <title>Laporan Perjanjian Pinjaman</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Laporan Perjanjian Pinjaman</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pinjaman ID</th>
                <th>Detail Perjanjian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laporanAs as $laporan)
                <tr>
                    <td>{{ $laporan->id }}</td>
                    <td>{{ $laporan->pinjaman_id }}</td>
                    <td>{{ $laporan->detail_perjanjian }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
