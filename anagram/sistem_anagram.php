<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANAGRAM</title>
</head>
<body>
    <?php
        if(isset($_GET['kata1'])){
            if($_GET['kata1'] == "kosong"){
                echo "Kosong";
            }
        }   
    ?>
    <?php
        if(isset($_GET['kata2'])){
            if($_GET['kata2'] == "kosong"){
                echo "Kosong";
            }
        }   
    ?>

    <h4>Masukkan Kata: </h4>
    <form action="anagram.php" method="post">
        <table>
            <tr>
                <td>Kata 1</td>
                <td><input type="text" name="kata1"></td>
            </tr>
            <tr>
                <td>Kata 2</td>
                <td><input type="text" name="kata2"></td>
            </tr>
                <td><input type="submit" value="cek"></td>
        </table>
    </form>
</body>
</html>