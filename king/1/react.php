<?php

include('token.php');

$token=$cokis; 
$limitnf=20; // 20 Status ? NewFeed 1 L?n

$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);

for($i=1;$i<=count($puaru[data]);$i++){

set_time_limit(0);

$camxuc= array('LOVE', 'WOW', 'HAHA', 'SAD', 'ANGRY', 'THANKFUL');

$mess=$camxuc[rand(0,count($camxuc)-1)];

echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');

}

 

function puaru($url){

$data = curl_init();

curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);

curl_setopt($data, CURLOPT_URL, $url);

$hasil = curl_exec($data);

curl_close($data);

return $hasil;

}

?>