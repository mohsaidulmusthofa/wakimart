<?php
    //get inputan dari user
    $kata = $_POST['kata'];
    
    //ubah string menjadi huruf kecil semua
    $ubah = strtolower($kata);

    //membalik string
    $palindrom = strrev($ubah);

    //cek apakah palindrome atau bukan
    if ($ubah == "") {
        header("location:polindrom.php?kata=kosong");
    }elseif ($ubah == $palindrom) {
        echo $kata. " = Benar";
    }elseif($ubah != $palindrom){
        echo $kata. " = Salah";
    }
?>