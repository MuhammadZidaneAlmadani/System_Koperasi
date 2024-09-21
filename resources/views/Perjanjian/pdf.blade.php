<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perjanjian Pinjaman</title>

    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 12px;
        }
    </style>

</head>

<body>

    <div style="width: 95%; margin: 0 auto;">
        <div style="width: 50%; float: left;">
            <h5>Perjanjian Pinjaman</h5>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Pinjaman ID</th>
                <th>Nama User</th>
                <th>Detail Perjanjian</th>
                <th>Jumlah Pinjaman</th>
                <th>Tanggal Pinjaman</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($perjanjianPinjaman as $laporan)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $laporan->pinjaman_id }}</td>
                    <td>{{ $laporan->name }}</td>
                    <td>{{ $laporan->detail_perjanjian }}</td>
                    <td>{{ $laporan->jumlah }}</td>
                    <td>{{ $laporan->tanggal_pinjaman }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
