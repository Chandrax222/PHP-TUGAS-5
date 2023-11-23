<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
</head>
<body>
    
    <?php
        $logika = (true and false);
        $logika2 = (true or false);
    ?>
    <span>Table Logika</span>
        <table border="1">
            <tr>
                <td>Input true</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td>
            </tr>
            <tr>
                <td><?= var_dump($logika); ?></td>
                <td><?= var_dump($logika); ?></td>
                <td><?= printf (10 > 20); ?></td>
                <td><?= printf (10 > 20); ?></td>
                
            </tr>
            <tr>
                <td><?= var_dump($logika); ?></td>
                <td><?= var_dump($logika2); ?></td>
                <td><?= printf(10 > 20); ?></td>
                <td><?= print(10 != 20); ?></td>
            </tr>
            <tr>
                <td><?= var_dump($logika2); ?></td>
                <td><?= var_dump($logika); ?></td>
                <td><?= printf(10 > 20); ?></td>
                <td><?= printf(10 <> 20); ?></td>
            </tr>
            <tr>
                <td><?= var_dump($logika2); ?></td>
                <td><?= var_dump($logika2); ?></td>
                <td><?= printf(10 == 10); ?></td>
                <td><?= printf(10 && 10); ?></td>
            </tr>
        </table>

    
</body>
</html>