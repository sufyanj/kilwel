<?php

auto('http://'.$_SERVER[HTTP_HOST].'/ujon.php');
auto('http://'.$_SERVER[HTTP_HOST].'/reste.php');
auto('http://'.$_SERVER[HTTP_HOST].'/resko.php');
auto('http://'.$_SERVER[HTTP_HOST].'/reslike.php');


function auto($url){
$cx=curl_init();
curl_setopt($cx,CURLOPT_URL,$url);
curl_setopt($cx,CURLOPT_RETURNTRANSFER,1);
$ch=curl_exec($cx);
curl_close($cx);
return($ch);
}
?>
        