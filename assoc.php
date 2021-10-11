<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>

<body>
    <h2>ASSOCIATIVE ARRAY</h2>
    <?php require 'menu.php'; ?>
    <?php
    $peserta = [
        'nama' => 'Syafa',
        'umur' => 22,
        'jantina' => 'Perempuan'
    ];
    ?>
    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $peserta['nama']; ?></td>
        </tr>
        <tr>
            <td>Umur:</td>
            <td><?php echo $peserta['umur']; ?></td>
        </tr>
        <tr>
            <td>Jantina:</td>
            <td><?php echo $peserta['jantina']; ?></td>
        </tr>
    </table>

</body>

</html>