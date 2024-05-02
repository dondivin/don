<?php
$word = strtoupper('Ntakirutimana');
$word1 = strtolower('NTAKIRUTIMANA');

if($word === $word1){
    echo '<script>alert("equal");</script>';
    echo 'word = ' . $word .' and word1 = ' . $word1 .'';
}else {
    echo '<script>alert("not equal");</script>';
    echo 'word = ' . $word .' and word1 = ' . $word1 .'';
}


?>