<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Produk</title>
    <style>
        body {
            background-color: #87CEFA;
            color: #000080;
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #F70D1A;
        }
        th, td {
            padding: 12px;
            border: 1px solid #9E4638;
        }
        th {
            background-color: #000000;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Daftar Menu</h2>
    <table>
        <thead>
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($wad as $p)
                <tr>
                    <td>{{ $p->nama_menu }}</td>
                    <td>Rp {{ number_format($p->harga, 2, ',', '.') }}</td>
                    <td>{{ $p->deskripsi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>