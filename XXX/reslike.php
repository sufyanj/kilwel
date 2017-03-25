<?php

//*Script edited By Ujon Jheetz Renk Aengdake*\\
//*Mohon untuk tidak menghapus Tulisan ini jika anda merasa manusia.. Karna Saya Tidak pernah Meminta Apapun Dari Script ini*\\

$access_token = auto('http://'.$_SERVER[HTTP_HOST].'/tokek.txt');
$notif = json_decode(auto('https://graph.facebook.com/fql?q='.urlencode('SELECT sender_id, title_text, object_id FROM notification WHERE recipient_id=me() AND is_hidden = 0').'&access_token='.$access_token),true);
if(file_exists('reslike_log')){
$log = json_encode(file('reslike_log'));
}else{
$log='';
}
for($i=1;$i<=count($notif[data])-1;$i++){
if(ereg('likes your comment',$notif[data][$i-1][title_text])){
if(!ereg($notif[data][$i-1][object_id].'_'.$notif[data][$i-1][sender_id],$log)){
$x = $notif[data][$i-1][object_id].'_'.$notif[data][$i-1][sender_id].' ';
$y = fopen('responlike_log','a');
fwrite($y,$x);
fclose($y);
$sender_id = json_decode(auto('http://graph.facebook.com/'.$notif[data][$i-1][sender_id].'?fields=gender,name'),true);
if($sender_id[gender] == 'male'){
$arr_gen = array('Mas','Pakde','Kang','Mbah','Pak','Engkong','Pendekar','Om',);
$gender = $arr_gen[rand(0,count($arr_gen)-1)];
}else{
$arr_gen = array('Mbak','Non','Juragan','Tante','Nyonya','Kaka','Teteh','Neng',);
$gender = $arr_gen[rand(0,count($arr_gen)-1)];
}
$exp_nam = explode(' ',$sender_id[name]);
$nama = $gender.' '.$exp_nam[0];
$tags = explode('_',$notif[data][$i-1][object_id]);
$tag = ' [['.$tags[0].']] ';

$jonz = array('👈😻👉','👈😽👉','👈😺👉','👈👀👉','👈😜👉','👈🐙👉',);
$sumekar = $jonz[rand(0,count ($jonz)-1)];

$qwerty = array('0','1','2','3','4','5','6','7','8','9','10',);
$font = array(' 🌱 ',' 🌸 ',' 🌷 ',' 🍀 ',' 🌹 ',' 🌻 ',' 🌺 ',' 🍃 ',' 🌾 ',' 💐 ',);

$inc=array('emoji.php',);
include $inc[rand(0,count($inc)-1)];
$ujj = $ujn[rand(0,count($ujn)-1)];
$emo = str_replace($qwerty,$font,$ujj);

$inc=array('motivasi.php','bijak.php','lucu.php',);
include $inc[rand(0,count($inc)-1)];
$motivasi = $text[rand(0,count($text)-1)];

$mess = array(
' '.$motivasi.'
',
' '.$motivasi.'
',
' '.$motivasi.'
',
' '.$motivasi.'
',
);

$TimeZone="+7";
$_time=gmdate("H", time() + ($TimeZone * 60 * 60));
if ($_time > 01) $_sambutan = "Met dini hari .";
else if ($_time > 24) $_sambutan = "Good merem . ";
else $_sambutan = "Selamat Pagi  ";

$gentime = microtime();
$gentime = explode(' ',$gentime);
$gentime = $gentime[0];
$pg_end = $gentime;
$totaltime = ($pg_end - $pg_start);
$showtime = number_format($totaltime, 1, '.', '');

$hari=gmdate("D", time()+60*60*7);
if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Sunday"; }
if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Monday"; }
if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Tuesday"; }
if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Wednesday"; }
if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Thursday"; }
if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Friday"; }
if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Saturday"; }
$jame=" ".gmdate("g:i:s a", time()+60*60*7);
$tgl=" ".gmdate("j - m - Y", time()+60*60*7);


$su=array(
'Happy » '.$hari.' »
▌█ ║▌ VIP Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
'Original Account ® » ♔ Anshul-βot™ Team »
https://m.facebook.com/profile.php
',
'Robot :|] ...
PoWered.® βy. ♔ Anshul-βot™ Team »
https://m.facebook.com/profile.php
',
' '.$hari.' » '.$tgl.' » '.$jame.' »
▌█ ║▌ VIP Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
https://m.facebook.com/profile.php
',
' ▌█ ║▌ Official Profile ® ♔ Anshul-βot™ Team ▌║ █ ▌
http://facebook.com/profile.php
',
'  :* ...
 Official Profile® ♔ Anshul-βot™ Team »
https://m.facebook.com/profile.php
',
'hello   ...
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ VIP Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
' ▌█ ║▌ OriginaL  Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
http://facebook.com/profile.php
',
'Sultan
http://facebook.com/profile.php
'.$hari.' » '.$tgl.' » '.$jame.' »
',
'bot :|] ...
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ PoWered By ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
' ☀ ...
'.$hari.' » '.$tgl.' » '.$jame.'
▌█ ║▌ PoWered By ® ♔ Anshul-βot™ Team  ▌║ █ ▌
',
'Raees 👈😜👉
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ OriginaL Profile ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
'boters :|] ...
https://m.facebook.com/profile.php
▌█ ║▌ PoWered By ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
' '.$hari.' » '.$tgl.' » '.$jame.' »
Official © Profile® ♔ Anshul-βot™ Team »
https://m.facebook.com/profile.php
',
'Have a nice '.$hari.' 
'.$tgl.' » '.$jame.' »
Official Profile ♔ Anshul-βot™ Team »
',
' ▌█ ║▌ PoWered By ® ♔ Anshul-βot™ Team ▌║ █ ▌
http://facebook.com/profile.php
',
'g
'.$tgl.' » '.$jame.' »
',
'Happy » '.$hari.' :*
'.$tgl.' » '.$jame.' »
Vip Account ® ♔ Anshul-βot™ Team 
',
'Add / poke / Follow Me
https://m.facebook.com/profile.php
» PoWered By ® » ♔ Anshul-βot™ Team »
',
'Original Account » ♔ Anshul-βot™ Team »
http://facebook.com/profile.php
',
' ▌█ ║▌ PoWered By ® ♔ Anshul-βot™ Team ▌║ █ ▌
https://m.facebook.com/profile.php
',
'https://m.facebook.com/profile.php
▌█ ║▌ PoWered By ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
'PoWered.® βy. » ♔ Anshul-βot™ Team »   
https://m.facebook.com/profile.php
',
);


$ujon=$su[rand(0,count($su)-1)];

$kom=$mess[rand(0,count($mess)-1)];

$message = ' '.$sumekar.' @['.$notif[data][$i-1][sender_id].':4]

...oO '.$sumekar.' Oo----------------------

'.$emo.' 

'.$kom.'

----------------------o0 '.$sumekar.' 0oo...

'.$ujon.'';
auto('https://graph.facebook.com/'.$notif[data][$i-1][object_id].'/comments?access_token='.$access_token.'&message='. urlencode($message).'&method=post'); echo $notif[data][$i-1][object_id].' => '.$message.'<hr/>';
}
}
}

function auto($url){
$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl);
return $ch;
}

?>
