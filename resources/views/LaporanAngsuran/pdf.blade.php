<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Angsuran</title>

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
            <h5>Laporan Angsuran</h5>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Angsuran ID</th>
                <th>Detail Laporan</th>
                <th>Jumlah Angsuran</th>
                <th>Tanggal Angsuran</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($laporanAs as $laporan)
                <tr>
                    <td>{{ ++$no }}</td>
                    <td>{{ $laporan->angsuran_id }}</td>
                    <td>{{ $laporan->detail_laporan }}</td>
                    <td>{{ $laporan->jumlah_angsuran }}</td>
                    <td>{{ $laporan->tanggal_angsuran }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
