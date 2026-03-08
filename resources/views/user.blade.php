<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
            border-radius: 3px;
            margin: 2px;
            display: inline-block;
        }
        .btn-add {
            background-color: #4CAF50;
            margin-bottom: 15px;
        }
        .btn-edit {
            background-color: #2196F3;
        }
        .btn-delete {
            background-color: #f44336;
        }
        .success-box {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1>Data User</h1>
    
    @if(session('success'))
        <div class="success-box">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="/user/tambah" class="btn btn-add">+ Tambah User</a>
    
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Level ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Password</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $row)
            <tr>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->level_id }}</td>
                <td>{{ $row->username }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->password }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>
                    <a href="/user/ubah/{{ $row->user_id }}" class="btn btn-edit">Ubah</a>
                    <a href="/user/hapus/{{ $row->user_id }}" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus user {{ $row->username }}?')">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>