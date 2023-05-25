<!DOCTYPE html>
<html>
<head>
    <title>Daftar Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pegawai as $data)
                <tr>
                    <td>{{ $data->id }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->telepon }}</td>
                    <td>{{ $data->tanggal_lahir }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
