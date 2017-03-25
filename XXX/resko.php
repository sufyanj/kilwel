<?php

//*Script edited By Ujon Jheetz Renk Aengdake*\\
//*Mohon untuk tidak menghapus Tulisan ini jika anda merasa manusia.. Karna Saya Tidak pernah Meminta Apapun Dari Script ini*\\

 error_reporting(0);
          
 error_reporting(0);
     date_default_timezone_set("Asia/Kolkata");
    
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
 $stat = json_decode(auto('https://graph.facebook.com/me/feed?fields=id,message,created_time,from,comments,type&access_token='.$access_token.'&offset=0&limit=5'),true);
 $log = json_encode(file('resko_log'));
 for($i=1;$i<=count($stat[data]);$i++){
 $com = json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?access_token='.$access_token.'&limit=20&fields=id,message,from'),true);
 if(count($com[data]) > 0){
 for($c=1;$c<=count($com[data]);$c++){
 $dat = explode($com[data][$c-1][id],$log);
 if(count($dat) > 1){
 echo'Done<br/>';
 }else{
 $logx = $com[data][$c-1][id].'__';
 $logy = fopen('resko_log','a');
 fwrite($logy,$logx);
 fclose($logy);
 $gen = json_decode(auto('http://graph.facebook.com/'.$com[data][$c-1][from][id].'?fields=gender'),true);

$jonz = array('👈😻👉','👈😽👉','👈😺👉','👈👀👉','👈😜👉','👈🐙👉',);
$sumekar = $jonz[rand(0,count ($jonz)-1)];
 
 $nama = ' '.$com[data][$c-1][from][name].' ';

$qwerty = array('0','1','2','3','4','5','6','7','8','9','10',);
$font = array(' 🌱 ',' 🌸 ',' 🌷 ',' 🍀 ',' 🌹 ',' 🌻 ',' 🌺 ',' 🍃 ',' 🌾 ',' 💐 ',);



$inc=array('emoji.php',);
include $inc[rand(0,count($inc)-1)];
$ujj = $ujn[rand(0,count($ujn)-1)];
$emo = str_replace($qwerty,$font,$ujj);
 
 
 include 'senggol.php';
 if($bot[telat] =='on'){
 $telat =getDelay($stat[data][$i-1][created_time]);
 $telat1 = ' 🎯 '.$telat.'  ' ;
 }else{
 $telat1 = '';
 }
 if($bot[jam] =='on'){
 $jam = ' 🎯 '.$date.' ' ;
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
 $motivasi = ' '.$motivasi.' '; 
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
' ▌█ ║▌ Official Profile ® ♔ SUFYAN JAN™ Team ▌║ █ ▌
http://facebook.com/100007281001467',
'  :* ...
 Official Profile® ♔ SUFYAN JAN™ Team »
https://m.facebook.com/profile.php
',
'hello   ...
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ VIP Account ® ♔ Anshul-βot™ Team ▌║ █ ▌
',
' ▌█ ║▌ OriginaL  Account ® ♔ GANGSTER-βot™ Team ▌║ █ ▌
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
▌█ ║▌ PoWered By ® ♔ GANGSTER-βot™ Team  ▌║ █ ▌
',
'Raees 👈😜👉
'.$hari.' » '.$tgl.' » '.$jame.' 
▌█ ║▌ OriginaL Profile ® ♔ SUFYAN-JAN ▌║ █ ▌
',
'boters :|] ...
https://m.facebook.com/profile.php
▌█ ║▌ PoWered By ® ♔ SUFYAN JAN ▌║ █ ▌
',
' '.$hari.' » '.$tgl.' » '.$jame.' »
Official © Profile® ♔ SUFYAN JAN »
https://m.facebook.com/profile.php
',
'Have a nice '.$hari.' 
'.$tgl.' » '.$jame.' »
Official Profile ♔ SUFYAN JAN™ Team »
',
' ▌█ ║▌ PoWered By ® ♔ SUFYAN-βot™ Team ▌║ █ ▌
http://facebook.com/profile.php
',
'g
'.$tgl.' » '.$jame.' »
',
'Happy » '.$hari.' :*
'.$tgl.' » '.$jame.' »
Vip Account ® ♔ SUFYAN-βot™ Team 
',
'Add / poke / Follow Me
https://m.facebook.com/100007281001467
» PoWered By ® » ♔ Anshul-βot™ Team »
',
'Original Account » ♔ SUFYAN-βot™ Team »
http://facebook.com/100007281001467
',
' ▌█ ║▌ PoWered By ® ♔ SUFYAN-βot™ Team ▌║ █ ▌
https://m.facebook.com/100007281001467',
'https://m.facebook.com/100007281001467
▌█ ║▌ PoWered By ® ♔ SUFYAN JAN ▌║ █ ▌
',
'PoWered.® βy. » ♔ GANGSTER-βot™ Team »   
https://m.facebook.com/100007281001467',
);


$ujon=$su[rand(0,count($su)-1)];
 
 $iseng = '        ';
 $iseng1 = getEmo($iseng);
 $iseng2 = '        ';
 $iseng3 = getEmo($iseng2);
 $message = ' '.$sumekar.' '.$nama.'

...oO '.$sumekar.' Oo-----------------------

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
 urldecode('%F3%BE%80%80'),
 urldecode('%F3%BE%80%81'),
 urldecode('%F3%BE%80%82'),
 urldecode('%F3%BE%80%83'),
 urldecode('%F3%BE%80%84'),
 urldecode('%F3%BE%80%85'),
 urldecode('%F3%BE%80%87'), 
 urldecode('%F3%BE%80%B8'), 
 urldecode('%F3%BE%80%BC'),
 urldecode('%F3%BE%80%BD'),
 urldecode('%F3%BE%80%BE'),
 urldecode('%F3%BE%80%BF'),
 urldecode('%F3%BE%81%80'),
 urldecode('%F3%BE%81%81'),
 urldecode('%F3%BE%81%82'),
 urldecode('%F3%BE%81%83'),
 urldecode('%F3%BE%81%85'),
 urldecode('%F3%BE%81%86'),
 urldecode('%F3%BE%81%87'),
 urldecode('%F3%BE%81%88'),
 urldecode('%F3%BE%81%89'), 
 urldecode('%F3%BE%81%91'),
 urldecode('%F3%BE%81%92'),
 urldecode('%F3%BE%81%93'), 
 urldecode('%F3%BE%86%90'),
 urldecode('%F3%BE%86%91'),
 urldecode('%F3%BE%86%92'),
 urldecode('%F3%BE%86%93'),
 urldecode('%F3%BE%86%94'),
 urldecode('%F3%BE%86%96'),
 urldecode('%F3%BE%86%9B'),
 urldecode('%F3%BE%86%9C'),
 urldecode('%F3%BE%86%9D'),
 urldecode('%F3%BE%86%9E'),
 urldecode('%F3%BE%86%A0'),
 urldecode('%F3%BE%86%A1'),
 urldecode('%F3%BE%86%A2'),
 urldecode('%F3%BE%86%A4'),
 urldecode('%F3%BE%86%A5'),
 urldecode('%F3%BE%86%A6'),
 urldecode('%F3%BE%86%A7'),
 urldecode('%F3%BE%86%A8'),
 urldecode('%F3%BE%86%A9'),
 urldecode('%F3%BE%86%AA'),
 urldecode('%F3%BE%86%AB'),
 urldecode('%F3%BE%86%AE'),
 urldecode('%F3%BE%86%AF'),
 urldecode('%F3%BE%86%B0'),
 urldecode('%F3%BE%86%B1'),
 urldecode('%F3%BE%86%B2'),
 urldecode('%F3%BE%86%B3'), 
 urldecode('%F3%BE%86%B5'),
 urldecode('%F3%BE%86%B6'),
 urldecode('%F3%BE%86%B7'),
 urldecode('%F3%BE%86%B8'),
 urldecode('%F3%BE%86%BB'),
 urldecode('%F3%BE%86%BC'),
 urldecode('%F3%BE%86%BD'),
 urldecode('%F3%BE%86%BE'),
 urldecode('%F3%BE%86%BF'),
 urldecode('%F3%BE%87%80'),
 urldecode('%F3%BE%87%81'),
 urldecode('%F3%BE%87%82'),
 urldecode('%F3%BE%87%83'),
 urldecode('%F3%BE%87%84'),
 urldecode('%F3%BE%87%85'),
 urldecode('%F3%BE%87%86'),
 urldecode('%F3%BE%87%87'), 
 urldecode('%F3%BE%87%88'),
 urldecode('%F3%BE%87%89'),
 urldecode('%F3%BE%87%8A'),
 urldecode('%F3%BE%87%8B'),
 urldecode('%F3%BE%87%8C'),
 urldecode('%F3%BE%87%8D'),
 urldecode('%F3%BE%87%8E'),
 urldecode('%F3%BE%87%8F'),
 urldecode('%F3%BE%87%90'),
 urldecode('%F3%BE%87%91'),
 urldecode('%F3%BE%87%92'),
 urldecode('%F3%BE%87%93'),
 urldecode('%F3%BE%87%94'),
 urldecode('%F3%BE%87%95'),
 urldecode('%F3%BE%87%96'),
 urldecode('%F3%BE%87%97'),
 urldecode('%F3%BE%87%98'),
 urldecode('%F3%BE%87%99'),
 urldecode('%F3%BE%87%9B'), 
 urldecode('%F3%BE%8C%AC'),
 urldecode('%F3%BE%8C%AD'),
 urldecode('%F3%BE%8C%AE'),
 urldecode('%F3%BE%8C%AF'),
 urldecode('%F3%BE%8C%B0'),
 urldecode('%F3%BE%8C%B2'),
 urldecode('%F3%BE%8C%B3'),
 urldecode('%F3%BE%8C%B4'),
 urldecode('%F3%BE%8C%B6'),
 urldecode('%F3%BE%8C%B8'),
 urldecode('%F3%BE%8C%B9'),
 urldecode('%F3%BE%8C%BA'),
 urldecode('%F3%BE%8C%BB'),
 urldecode('%F3%BE%8C%BC'),
 urldecode('%F3%BE%8C%BD'),
 urldecode('%F3%BE%8C%BE'),
 urldecode('%F3%BE%8C%BF'), 
 urldecode('%F3%BE%8C%A0'),
 urldecode('%F3%BE%8C%A1'),
 urldecode('%F3%BE%8C%A2'),
 urldecode('%F3%BE%8C%A3'),
 urldecode('%F3%BE%8C%A4'),
 urldecode('%F3%BE%8C%A5'),
 urldecode('%F3%BE%8C%A6'),
 urldecode('%F3%BE%8C%A7'),
 urldecode('%F3%BE%8C%A8'),
 urldecode('%F3%BE%8C%A9'),
 urldecode('%F3%BE%8C%AA'),
 urldecode('%F3%BE%8C%AB'), 
 urldecode('%F3%BE%8D%80'),
 urldecode('%F3%BE%8D%81'),
 urldecode('%F3%BE%8D%82'),
 urldecode('%F3%BE%8D%83'),
 urldecode('%F3%BE%8D%84'),
 urldecode('%F3%BE%8D%85'),
 urldecode('%F3%BE%8D%86'),
 urldecode('%F3%BE%8D%87'),
 urldecode('%F3%BE%8D%88'),
 urldecode('%F3%BE%8D%89'),
 urldecode('%F3%BE%8D%8A'),
 urldecode('%F3%BE%8D%8B'),
 urldecode('%F3%BE%8D%8C'),
 urldecode('%F3%BE%8D%8D'),
 urldecode('%F3%BE%8D%8F'),
 urldecode('%F3%BE%8D%90'),
 urldecode('%F3%BE%8D%97'),
 urldecode('%F3%BE%8D%98'),
 urldecode('%F3%BE%8D%99'),
 urldecode('%F3%BE%8D%9B'),
 urldecode('%F3%BE%8D%9C'),
 urldecode('%F3%BE%8D%9E'), 
 urldecode('%F3%BE%93%B2'), 
 urldecode('%F3%BE%93%B4'),
 urldecode('%F3%BE%93%B6'), 
 urldecode('%F3%BE%94%90'),
 urldecode('%F3%BE%94%92'),
 urldecode('%F3%BE%94%93'),
 urldecode('%F3%BE%94%96'),
 urldecode('%F3%BE%94%97'),
 urldecode('%F3%BE%94%98'),
 urldecode('%F3%BE%94%99'),
 urldecode('%F3%BE%94%9A'),
 urldecode('%F3%BE%94%9C'),
 urldecode('%F3%BE%94%9E'),
 urldecode('%F3%BE%94%9F'),
 urldecode('%F3%BE%94%A4'),
 urldecode('%F3%BE%94%A5'),
 urldecode('%F3%BE%94%A6'),
 urldecode('%F3%BE%94%A8'), 
 urldecode('%F3%BE%94%B8'),
 urldecode('%F3%BE%94%BC'),
 urldecode('%F3%BE%94%BD'), 
 urldecode('%F3%BE%9F%9C'), 
 urldecode('%F3%BE%A0%93'),
 urldecode('%F3%BE%A0%94'),
 urldecode('%F3%BE%A0%9A'),
 urldecode('%F3%BE%A0%9C'),
 urldecode('%F3%BE%A0%9D'),
 urldecode('%F3%BE%A0%9E'),
 urldecode('%F3%BE%A0%A3'), 
 urldecode('%F3%BE%A0%A7'),
 urldecode('%F3%BE%A0%A8'),
 urldecode('%F3%BE%A0%A9'), 
 urldecode('%F3%BE%A5%A0'), 
 urldecode('%F3%BE%A6%81'),
 urldecode('%F3%BE%A6%82'),
 urldecode('%F3%BE%A6%83'), 
 urldecode('%F3%BE%AC%8C'),
 urldecode('%F3%BE%AC%8D'),
 urldecode('%F3%BE%AC%8E'),
 urldecode('%F3%BE%AC%8F'),
 urldecode('%F3%BE%AC%90'),
 urldecode('%F3%BE%AC%91'),
 urldecode('%F3%BE%AC%92'),
 urldecode('%F3%BE%AC%93'),
 urldecode('%F3%BE%AC%94'),
 urldecode('%F3%BE%AC%95'),
 urldecode('%F3%BE%AC%96'),
 urldecode('%F3%BE%AC%97'),
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
                     'Hows U ',
   'I Love U <3',
      'Tery Ho K Rahin Gy Dil Zid Py ara Ha Tera Shook Charha ha',
         'Yeh Dil Ap Py A gya',
            'IPL Ho GYa hA Start <3',
               'Lets Dance',
                  'ReSt KrO BoT Is WorkIng ;)',
                     'Ap BhT Yaaaad Aty Ho :P',
'Like Back',
  'Poke Now',
    'ADD CLOSE',
      'DO REST MY BOT IS ALWAYS ON',
        'GIVE JUST NOW',
          'FACEBOOK LOVER HO',
        'Like Back Jann',
      '>> ',
    'like Back',
  'Poke Now ',
'Are U Famous',
   'See My BOT Speed',
      'like Done >> ',
         'App Just Now DO Or Lo',
'Like Back',
'Poke Now'
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
 
 
 
