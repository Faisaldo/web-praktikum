<?php
// Data Mahasiswa
$mahasiswa = [
    ['nama' => 'FAISAL', 'npm' => '22313025', 'kelas' => 'TI 22 A'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        table th {
            background-color: #4CAF50;
            color: white;
        }
        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 20px 0;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1>Data Mahasiswa</h1>

    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['npm']; ?></td>
                    <td><?php echo $mhs['kelas']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="#" class="btn">Tambah Data</a>
    </div>

</body>
</html>
