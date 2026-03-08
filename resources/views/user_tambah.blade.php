<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    <style>
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: inline-block;
            width: 100px;
            font-weight: bold;
        }
        input, select {
            padding: 8px;
            width: 250px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        .btn {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
        .btn-back {
            background-color: #f44336;
        }
        .container {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah User</h1>
        
        <form method="post" action="/user/tambah_simpan">
            {{ csrf_field() }}
            
            <div class="form-group">
                <label>Level ID</label>
                <input type="number" name="level_id" required>
            </div>
            
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" required>
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn">Simpan</button>
                <a href="/user" class="btn btn-back">Kembali</a>
            </div>
        </form>
    </div>
</body>
</html>