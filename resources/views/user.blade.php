<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - First Or Create</title>
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
        .info-box {
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            padding: 10px;
            margin-bottom: 15px;
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
    <h1>Data User - firstOrCreate / firstOrNew</h1>
    
    <div class="info-box">
        <strong>Method:</strong> firstOrCreate() / firstOrNew()
    </div>
    
    @if(isset($status))
        <div class="success-box">
            <strong>Status:</strong> {{ $status }}
        </div>
    @endif
    
    @if(isset($data) && is_object($data))
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
    @elseif(isset($data) && is_string($data))
        <p class="error">{{ $data }}</p>
    @else
        <p>Data tidak ditemukan</p>
    @endif

    @if(isset($status))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 15px; border-radius: 3px;">
        <strong>Status:</strong> {{ $status }}
    </div>
@endif
</body>
</html>