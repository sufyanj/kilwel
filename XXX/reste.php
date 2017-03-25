<?php

//*Script edited By Ujon Jheetz Renk Aengdake*\\
//*Mohon untuk tidak menghapus Tulisan ini jika anda merasa manusia.. Karna Saya Tidak pernah Meminta Apapun Dari Script ini*\\

error_reporting(0);
date_default_timezone_set("Asia/Jakarta");

function indonesian_date ($timestamp = '', $date_format = 'l, j F Y | H:i', $suffix = 'WIB')

{

if (trim ($timestamp) == '')
{
$timestamp = time ();
}
elseif (!ctype_digit ($timestamp))
{
$timestamp = strtotime ($timestamp);
}
# remove S (st,nd,rd,th) there are no such things in indonesia :p
$date_format = preg_replace("/S/", "", $date_format);
$pattern = array (
'/Mon[^day]/','/Tue[^sday]/','/Wed[^nesday]/','/Thu[^rsday]/',
'/Fri[^day]/','/Sat[^urday]/','/Sun[^day]/','/Monday/','/Tuesday/',
'/Wednesday/','/Thursday/','/Friday/','/Saturday/','/Sunday/',
'/Jan[^uary]/','/Feb[^ruary]/','/Mar[^ch]/','/Apr[^il]/','/May/',
'/Jun[^e]/','/Jul[^y]/','/Aug[^ust]/','/Sep[^tember]/','/Oct[^ober]/',
'/Nov[^ember]/','/Dec[^ember]/','/January/','/February/','/March/',
'/April/','/June/','/July/','/August/','/September/','/October/',
'/November/','/December/',
);
$replace = array ( 'Sen','Sel','Rab','Kam','Jum','Sab','Min',
'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu',
'Jan','Feb','Mar','Apr','Mei','Jun','Jul','Ags','Sep','Okt','Nov','Des',
'Januari','Februari','Maret','April','Juni','Juli','Agustus','Sepember',
'Oktober','November','Desember',
);

$date = date ($date_format, $timestamp);
$date = preg_replace ($pattern, $replace, $date);
$date = "{$date} {$suffix}";
return $date;
};
if(!empty($_GET['x'])){
$status = $_GET['x'];
} else {

$date = indonesian_date () ;
}

$access_token = auto('http://'.$_SERVER[HTTP_HOST].'/tokek.txt');
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id'),true);
$stat = json_decode(auto('https://graph.facebook.com/me/home?fields=id&access_token='.$access_token.'&offset=0&limit=10'),true);
$log = json_encode(file('reste_log'));
for($i=1;$i<=count($stat[data]);$i++){
$com = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&limit=20&fields=id,message,from'),true);
if(count($com[data]) > 0){
for($c=1;$c<=count($com[data]);$c++){
$dat = explode($com[data][$c-1][id],$log);
if(count($dat) > 1){
echo'Done<br/>';
}else{
$logx = $com[data][$c-1][id].'__';
$logy = fopen('reste_log','a');
fwrite($logy,$logx);
fclose($logy);
$gen = json_decode(auto('http://graph.facebook.com/'.$com[data][$c-1][from][id].'?fields=gender'),true);

$jonz = array('👈😻👉','👈😽👉','👈😺👉','👈👀👉','👈😜👉','👈🐙👉',);
$sumekar = $jonz[rand(0,count ($jonz)-1)];

$nama = '  '.$com[data][$c-1][from][name].' ';

$qwerty = array('0','1','2','3','4','5','6','7','8','9','10',);
$font = array(' 🌱 ',' 🌸 ',' 🌷 ',' 🍀 ',' 🌹 ',' 🌻 ',' 🌺 ',' 🍃 ',' 🌾 ',' 💐 ',);



$inc=array('emoji.php',);
include $inc[rand(0,count($inc)-1)];
$ujj = $ujn[rand(0,count($ujn)-1)];
$emo = str_replace($qwerty,$font,$ujj);

include 'senggol.php';
if($bot[telat] =='on'){
$telat =getDelay($stat[data][$i-1][created_time]);
$telat1 = ' '.$telat.'  ' ;
}else{
$telat1 = '';
}
if($bot[jam] =='on'){
$jam = '  Comment Success...... '.$date.' ' ;
}else{
$jam = '';
}
$inc=array('motivasi.php','bijak.php','lucu.php',);
include $inc[rand(0,count($inc)-1)];
$motivasi = $text[rand(0,count($text)-1)];

if($bot[emoji] =='on'){
$motivasi = getEmo($motivasi);
}
if($bot[emoji] =='off'){
$motivasi = '  '.$motivasi.'  ';
}

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
'Juxt now...
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ VIP Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
' ▌█ ║▌ OriginaL  Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
http://facebook.com/profile.php
',
'Buhahahaha ;)
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
'tere mast mast do nain 👈😜👉
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ OriginaL Profile ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
'hello boters :|] ...
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
'huuu 
'.$tgl.' » '.$jame.' »
',
'Happy » '.$hari.' :*
'.$tgl.' » '.$jame.' »
Vip Account ® ♔ Anshul-βot™ Team 
',
'Add / poke / Follow Me
https://m.facebook.com/profile.php
» PoWered By ® » ♔ X-βot™ Team »
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

$iseng = '        ';
$iseng1 = getEmo($iseng);
$iseng2 = '        ';
$iseng3 = getEmo($iseng2);


$message = ' '.$sumekar.' '.$nama.'

..oO '.$sumekar.' Ooo----------------------

'.$emo.' 

'.$motivasi.'

----------------------o0 '.$sumekar.' 0oo...

'.$ujon.' ';
if($com[data][$c-1][from][id] != $me[id]) {
auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&message='.urlencode($message).'&method=post');


}
}
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

function getData($xurl){
$xcx=curl_init();
curl_setopt($xcx,CURLOPT_URL,$xurl);
curl_setopt($xcx,CURLOPT_RETURNTRANSFER,1);
curl_setopt($xcx, CURLOPT_COOKIEFILE,'coker_log');
$xch = curl_exec($xcx);
curl_close($xcx);
return $xch;
}



function getEmo($n){

$emo=array(
'☺','✌','✳','⛄','☕','♨','⛵','⛽','✈','⛲','⛺','⛪','☎','✉','✂','🚽','🛀��','😃','😄','😞','😢','😷','😓','😰','😥','😪','😨','😱','😵','😭','😠','😳','😲','😤','😉','😔','😒','😂','😡','👿','👽','👾','👻','👼','👯','💂','👳','🎅','👮','👷','👸','👴','👵','👨','👩','👦','👧','👶','👱','👫','🎎','💃','👂','👃','👀','🌟','🌙','🎵','🎶','💤','🔥','🔔','🎀','🌂','💧','💺','🔨','〽','🔱','🔰','🀄','💎','💠','🔷','🔶',
);
$mess=$emo[rand(0,count($emo)-1)];
$message = explode(' ',$n);
foreach($message as $x => $y){
$mess .= $emo[rand(0,count($emo)-1)].' '.$y.' ';
}
return($mess);
}
function getDelay($n,$x=null){
$tek =array(
'Ups... komen telat',
'selalu setia meski komen terlambat',
);
if(!$x){ $teks=$tek[rand(0,count($tek)-1)];}
$n=substr($n,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
$d=$t-($m*60);
if($d<0){ return false;}else{
if($m==0){
return $teks.' '.$d.' detik  ';
}else{
return $teks.' '.$m.' menit  '.$d.' detik  ';
}
}
}

?>


