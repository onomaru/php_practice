<?php 

//1
function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
console_log("はじめてのphpプログラム。");

echo '<script>console.log("画面に出力しています。")</script>';


//2 syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';'",

//3
echo '<script>console.log("はじめてのphpプログラム。画面に出力しています。")</script>';
echo '<script>console.log("'."はじめてのphpプログラム。"."画面に出力しています。".'")</script>';

//4
echo '<script>console.log("渋\n谷\n横\n浜")</script>';

//5
echo '<script>console.log("渋")</script>';
echo '<script>console.log("谷")</script>';
echo '<script>console.log("\n")</script>';
echo '<script>console.log("横")</script>';
echo '<script>console.log("浜")</script>';

?>