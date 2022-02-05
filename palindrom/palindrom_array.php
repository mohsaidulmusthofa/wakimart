<?php
   
    function palindrome ($arr, $n)
    {
        $cek = 0;
        /* ubah nilai array menjadi huruf kecil agar ketika user 
        menginputkan huruf besar dan kapital, hasillnya akan sesuai*/
        $ubah = array_map('strtolower', $arr);

        // cek setiap elemen arranya
        for ($i = 0; $i <= $n/2 && $n != 0; $i++) { 
            if ($ubah[$i] != $ubah[$n - $i -1 ]) 
            {
                $cek = 1;
                break;
            }
        }

        //print apakah array palindrome atau bukan
        if ($cek != 1)
            echo "Benar";
        else
            echo "Salah";
    }

    // Test
    $arr = array("M","A","l","a","M");
    $n = count($arr);
    palindrome ($arr, $n);
?>