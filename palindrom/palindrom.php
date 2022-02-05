<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PALINDROM</title>
</head>
<body>
    <?php
        if(isset($_GET['kata'])){
            if($_GET['kata'] == "kosong"){
                echo "Kosong";
            }
        }   
    ?>

    <h4>Masukkan Kata: </h4>
    <form action="cek.php" method="post">
        <table>
            <tr>
                <td>Kata</td>
                <td><input type="text" name="kata"></td>
                <td><input type="submit" value="cek"></td>
            </tr>
        </table>
    </form>
</body>
</html>
