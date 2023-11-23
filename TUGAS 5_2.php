<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5-2</title>
</head>
<body>

    <?php
        $input1_a = ("Ayo ");
        $input1 = ("Bersama ");
        $input2_b = ("Belajar ");
        $input2 = ("Niomic");
    ?>

    <h1>Operator String</h1>
    <table border="1">     
        <tr>
            <td>Input 1</td>
            <td>Input 2</td>
            <td>Hasil</td>
        </tr>
        <tr>
            <td><?= $input1_a; ?></td>
            <td><?= $input2_b; ?></td>
            <td><?= $gabungan = $input1_a . $input2_b; ?></td>
        </tr>
        <tr>
            <td><?= $input1; ?></td>
            <td><?= $input2; ?></td>
            <td><?= $gabungan = $input1 . $input2; ?></td>
        </tr>
    </table>
    <?php
        echo "<br>";
        echo ("Gabungan : Ayo "."Belajar "."Bersama "."Niomic");
    ?>
    <?php
        
    ?>
</body>
</html>