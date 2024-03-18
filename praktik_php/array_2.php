<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 2</title>
    <style>
        table {
        border-collapse: collapse;
        width: 50%;
        margin: 20px auto;
    }

    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #4CAF50;
        color: white;
    }
    </style>
</head>
<body>

    <?php 

        $Dosen = [

            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin'=> 'Perempuan'
            
        ];

        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
    ?>

    <br><br>


    <table >

            <tr>

                <th>Nama</th>
                <th>Domisili</th>
                <th>Jenis Kelamin</th>   

            </tr>

            <tr>
        <td><?php echo $Dosen['nama']; ?></td>
        <td><?php echo $Dosen['domisili']; ?></td>
        <td><?php echo $Dosen['jenis_kelamin']; ?></td>
    </tr>

        </table>

    
</body>
</html>