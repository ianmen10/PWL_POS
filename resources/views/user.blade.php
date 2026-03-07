<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - Eloquent ORM</title>
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
        .info-box {
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            padding: 10px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Data User dengan Eloquent ORM</h1>
    
    <div class="info-box">
        <strong>Eloquent ORM:</strong> Menggunakan Model UserModel::all()
    </div>
    
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
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <p>Total data: {{ count($data) }}</p>
</body>
</html>