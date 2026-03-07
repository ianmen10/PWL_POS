<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
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
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data User</h1>
    
    @if($data && is_object($data))
        <table>
            <tr>
                <th>User ID</th>
                <th>Level ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>{{ $data->user_id }}</td>
                <td>{{ $data->level_id }}</td>
                <td>{{ $data->username }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->password }}</td>
            </tr>
        </table>
    @elseif($data && is_string($data))
        <p class="error">{{ $data }}</p>
    @else
        <p>Data tidak ditemukan</p>
    @endif
</body>
</html>