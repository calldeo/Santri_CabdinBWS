<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa Belum Memilih</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Data Siswa Yang Belum Memilih</h2>
        <p>Tanggal: {{ date('d-m-Y') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $key => $s)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div style="margin-top: 30px;">
        <p>Total Siswa Belum Memilih: {{ $siswa->count() }} orang</p>
    </div>
</body>
</html>
