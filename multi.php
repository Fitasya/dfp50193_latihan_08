<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array</title>
</head>

<body>
    <?php require 'menu.php'; ?>
    <?php
    $peserta = [
        'Ali'   => [
            'nama' => 'Ghazali',
            'umur' => 16,
            'jantina' => 'Lelaki'
        ],
        'Adi' => [
            'nama' => 'Norhadi',
            'umur' => 26,
            'jantina' => 'Lelaki'
        ]
    ];
    ?>

    <table border="1" cellspacing="0" width="600">
        <tr>
            <th>Bil</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jantina</th>
        </tr>
        <?php
        $bil = 1;
        foreach ($peserta as $pelajar) {
        ?>
            <tr>
                <td><?php echo $bil++; ?></td>
                <td><?php echo $pelajar['nama']; ?></td>
                <td><?php echo $pelajar['umur']; ?> tahun</td>
                <td><?php echo $pelajar['jantina']; ?></td>
            </tr>
        <?php
        }
        ?>

    </table>

</body>

</html>