<?php

    function anagram($string1, $string2)
    {
        // konversi string menjadi huruf kecil 
        $change1 = strtolower($string1);
        $change2 = strtolower($string2);
    
        /* menghitung frekuensi munculnya karakter 
        di string 1 dan string 2 */
        $str1 = count_chars($change1);
        $str2 = count_chars($change2);
    
        // cek apakah anagram atau bukan anagram
        if ($str1 == $str2) {
            echo "Anagram";
        }else{
            echo "Bukan Anagram";
        }
    }

    // test
    anagram('zodiak', 'adikoz')
?>