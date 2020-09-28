<?php 

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
console_log("はじめてのphpプログラム");

echo '<script>console.log("はじめてのPHPプログラム")</script>';

?>