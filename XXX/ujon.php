<?php

//*Script edited By Ujon Jheetz Renk Aengdake*\\
//*Mohon untuk tidak menghapus Tulisan ini jika anda merasa manusia.. Karna Saya Tidak pernah Meminta Apapun Dari Script ini*\\

$access_token = auto('http://'.$_SERVER[HTTP_HOST].'/tokek.txt');

if(file_exists('ujon_log')){
$log=json_encode(file('ujon_log'));
}else{
$log='';
}

$aiueo = array('A','I','E','O','a','i','e','o',);
$uuu = array('u','u','u','u','u','u','u','u',);
$abc = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',);
$kotak = array('̲̅̅A̲̅','̲̅̅B̲̅','̲̅̅C̲̅','̲̅̅D̲̅','̲̅̅E̲̅','̲̅̅F̲̅','̲̅̅G̲̅','̲̅̅H̲̅','̲̅̅I̲̅','̲̅̅J̲̅','̲̅̅K̲̅','̲̅̅L̲̅','̲̅̅M̲̅','̲̅̅N̲̅','̲̅̅O̲̅','̲̅̅P̲̅','̲̅̅Q̲̅','̲̅̅R̲̅','̲̅̅S̲̅','̲̅̅T̲̅','̲̅̅U̲̅','̲̅̅V̲̅','̲̅̅W̲̅','̲̅̅X̲̅','̲̅̅Y̲̅','̲̅̅Z̲̅','̲̅̅a̲̅','̲̅̅b̲̅','̲̅̅c̲̅','̲̅̅d̲̅','̲̅̅e̲̅','̲̅̅f̲̅','̲̅̅g̲̅','̲̅̅h̲̅','̲̅̅i̲̅','̲̅̅j̲̅','̲̅̅k̲̅','̲̅̅l̲̅','̲̅̅m̲̅','̲̅̅n̲̅','̲̅̅o̲̅','̲̅̅p̲̅','̲̅̅q̲̅','̲̅̅r̲̅','̲̅̅s̲̅','̲̅̅t̲̅','̲̅̅u̲̅','̲̅̅v̲̅','̲̅̅w̲̅','̲̅̅x̲̅','̲̅̅y̲̅','̲̅̅z̲̅',);
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$stat=json_decode(auto('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_token='.$access_token.'&offset=0&limit=15'),true);

$jonz = array('👈😻👉','👈😽👉','👈😺👉','👈👀👉','👈😜👉','👈🐙👉',);
$sumekar = $jonz[rand(0,count ($jonz)-1)];

$qwerty = array('0','1','2','3','4','5','6','7','8','9','10',);
$font = array(' 🌱 ',' 🌸 ',' 🌷 ',' 🍀 ',' 🌹 ',' 🌻 ',' 🌺 ',' 🍃 ',' 🌾 ',' 💐 ',);

$inc=array('emoji.php',);
include $inc[rand(0,count($inc)-1)];
$ujj = $ujn[rand(0,count($ujn)-1)];
$emo = str_replace($qwerty,$font,$ujj);

for($i=1;$i<=count($stat[data]);$i++){
if(!ereg($stat[data][$i-1][id],$log)){
if($stat[data][$i-1][from][id] != $me[id]){
$x=$stat[data][$i-1][id].'  ';
$y = fopen('ujon_log','a');
fwrite($y,$x);
fclose($y);
$bot=array('nomer','latah','biasa',);
$robot=$bot[rand(0,count($bot)-1)];
$s=$stat[data][$i-1][message];

$inc=array('motivasi.php','bijak.php','lucu.php',);
include $inc[rand(0,count($inc)-1)];
$motiv = $text[rand(0,count($text)-1)];


$gen=json_decode(auto('http://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=gender'),true);
if($gen[gender] == 'male'){
$arr_gen = array('Kak','Mas',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}else{
$arr_gen = array('Mbak','Kak',);
$gender = $arr_gen[rand(0,count ($arr_gen)-1)];
}
$exp_nam = explode(' ',$stat[data][$i-1][from][name]);
$exp_nam = str_replace($abc,$kotak,$exp_nam);
$nama = $gender.' ['.$exp_nam[0].']';
if($stat[data][$i-1][type] == 'photo' ){
$salah= array(
' '.$motiv.'
', 
' '.$motiv.'
', 
' '.$motiv.'
', 
' '.$motiv.'
',
 ' '.$motiv.'
',
 ' '.$motiv.'
',
);
}else{
$salah = array(
' '.$motiv.'
', 
' '.$motiv.'
', 
' '.$motiv.'
', 
' '.$motiv.'
',
 ' '.$motiv.'
',
 ' '.$motiv.'
',
); }

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
▌█ ║▌ VIP Account ® ♔ SUFYAN JAN ▌║ █ ▌
',
'Original Account ® » ♔  SUFYAN JAN »
https://m.facebook.com/profile.php
',
'Robot :|] ...
PoWered.® βy. ♔  SUFYAN JAN  »
https://m.facebook.com/profile.php
',
' '.$hari.' » '.$tgl.' » '.$jame.' »
▌█ ║▌ VIP Account ® ♔  SUFYAN JAN  ▌║ █ ▌
https://m.facebook.com/profile.php
',
' ▌█ ║▌ Official Profile ® ♔ SUFYAN JAN  ▌║ █ ▌
http://facebook.com/profile.php
',
'  :* ...
 Official Profile® ♔  SUFYAN JAN  Team »
https://m.facebook.com/profile.php
',
'hello   ...
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ VIP Account ® ♔  SUFYAN JAN  ▌║ █ ▌
',
' ▌█ ║▌ OriginaL  Account ® ♔  SUFYAN JAN  ▌║ █ ▌
http://facebook.com/profile.php
',
'Sultan
http://facebook.com/profile.php
'.$hari.' » '.$tgl.' » '.$jame.' »
',
'bot :|] ...
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ PoWered By ® ♔  SUFYAN JAN  ▌║ █ ▌
',
' ☀ ...
'.$hari.' » '.$tgl.' » '.$jame.'
▌█ ║▌ PoWered By ® ♔  SUFYAN JAN   ▌║ █ ▌
',
'Raees 👈😜👉
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ OriginaL Profile ® ♔  SUFYAN JAN ▌║ █ ▌
',
'boters :|] ...
https://m.facebook.com/profile.php
▌█ ║▌ PoWered By ® ♔ SUFYAN JAN  ▌║ █ ▌
',
' '.$hari.' » '.$tgl.' » '.$jame.' »
Official © Profile® ♔  SUFYAN JAN  »
https://m.facebook.com/profile.php
',
'Have a nice '.$hari.' 
'.$tgl.' » '.$jame.' »
Official Profile ♔  SUFYAN JAN  »
',
' ▌█ ║▌ PoWered By ® ♔  SUFYAN JAN  ▌║ █ ▌
http://facebook.com/profile.php
',
'g
'.$tgl.' » '.$jame.' »
',
'Happy » '.$hari.' :*
'.$tgl.' » '.$jame.' »
Vip Account ® ♔  SUFYAN JAN  
',
'Add / poke / Follow Me
https://m.facebook.com/profile.php
» PoWered By ® » ♔  SUFYAN JAN  »
',
'Original Account » ♔  SUFYAN JAN  »
http://facebook.com/profile.php
',
' ▌█ ║▌ PoWered By ® ♔  SUFYAN JAN  ▌║ █ ▌
https://m.facebook.com/profile.php
',
'https://m.facebook.com/profile.php
▌█ ║▌ PoWered By ® ♔  SUFYAN JAN  ▌║ █ ▌
',
'PoWered.® βy. » ♔  SUFYAN JAN  »   
https://m.facebook.com/profile.php
',
);

$ujon=$su[rand(0,count($su)-1)];

$kamu = '  '.$stat[data][$i-1][from][name].' ';

$komentar = $salah[rand(0,count($salah)-1)];

$message = ' '.$sumekar.' '.$kamu.'
...oO '.$sumekar.' Oo-------------------

'.$emo.' 

'.$komentar.'

----------------------o0 '.$sumekar.' 0oo...

'.$ujon.' ';

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/likes?access_token='.$access_token.'&method=post');
echo $stat[data][$i-1][from][name].'=> '.htmlspecialchars($stat[data][$i-1][message]).'
Komeng => '.$message.'';
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
