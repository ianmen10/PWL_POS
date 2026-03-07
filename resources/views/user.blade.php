<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User - Aggregates</title>
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
    </style>
</head>
<body>
    <h1>Aggregates Data User</h1>
    
    <div class="info-box">
        <strong>Method Aggregates:</strong> count(), max(), min(), avg()
    </div>
    
    <table>
        <tr>
            <th>Jumlah User</th>
            <td>{{ $jumlah }}</td>
        </tr>
        <tr>
            <th>Level ID Tertinggi (Max)</th>
            <td>{{ $max }}</td>
        </tr>
        <tr>
            <th>Level ID Terendah (Min)</th>
            <td>{{ $min }}</td>
        </tr>
        <tr>
            <th>Rata-rata Level ID (Avg)</th>
            <td>{{ $avg }}</td>
        </tr>
    </table>
    
    <p>Total data di tabel m_user: {{ $jumlah }} baris</p>
    <tr>
    <th>Total Level ID (Sum)</th>
    <td>{{ $sum ?? '-' }}</td>
</tr>
</body>
</html>