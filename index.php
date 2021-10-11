<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeric Array</title>
</head>
<body>
    <?php require 'menu.php'; ?>
    <h2>NUMERIC ARRAY</h2>
    <h3>CONTOH 1</h3>
    <?php $peserta = array('Ali', 'Adi', 'Mi'); ?>
    <ul>
        <li><?php echo $peserta[0]; ?></li>
        <li><?php echo $peserta[1]; ?></li>
        <li><?php echo $peserta[2]; ?></li>
    </ul>
    <h3>CONTOH 2</h3>
    <?php $peserta = ['Alia', 'Adila', 'Mimi']; ?>
    <ul>
        <li><?php echo $peserta[0]; ?></li>
        <li><?php echo $peserta[1]; ?></li>
        <li><?php echo $peserta[2]; ?></li>
    </ul>
    
</body>
</html>