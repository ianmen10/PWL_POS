<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Relationships</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        th {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9e9e9;
        }
        .info-box {
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            padding: 10px;
            margin-bottom: 20px;
        }
        .level-table th {
            background-color: #2196F3;
        }
    </style>
</head>
<body>
    <h1>Praktikum 2.7 - Eloquent Relationships</h1>
    
    <div class="info-box">
        <strong>Relasi:</strong> UserModel belongsTo LevelModel (Many to One) <br>
        <strong>Relasi:</strong> LevelModel hasMany UserModel (One to Many)
    </div>

    <h2>Data User dengan Detail Level</h2>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level ID</th>
                <th>Level Kode</th>
                <th>Level Nama</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->level_id }}</td>
                <td>{{ $user->level->level_kode ?? '-' }}</td>
                <td>{{ $user->level->level_nama ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <h2>Data Level dengan Jumlah User</h2>
    <table class="level-table">
        <thead>
            <tr>
                <th>Level ID</th>
                <th>Level Kode</th>
                <th>Level Nama</th>
                <th>Jumlah User</th>
            </tr>
        </thead>
        <tbody>
            @foreach($levels as $level)
            <tr>
                <td>{{ $level->level_id }}</td>
                <td>{{ $level->level_kode }}</td>
                <td>{{ $level->level_nama }}</td>
                <td>{{ $level->users_count }} user</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total User:</strong> {{ $users->count() }} user</p>
    <p><strong>Total Level:</strong> {{ $levels->count() }} level</p>
</body>
</html>