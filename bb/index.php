<?php
error_reporting(0);
function home($indonesia=null){
if($indonesia){
echo' <center>
<b>Info</b><hr>
Token = '.$indonesia.' <hr>
Sukses in Saved <p>
Cek Eksekusi Manual » <a href="beranda.php">beranda.php</a>
<P>
Set Cron Jobs:<hr>
Via Hosting » <b>public_html/beranda.php</b><hr>
Via link » <b>http://'.$_SERVER[HTTP_HOST].'/beranda.php</b>
<hr> 
Thank To <a href="http://haxer.heck.in">haxer.heck.in</a>';
}else{
include('token.php');
$data=json_decode(file_get_contents('https://graph.facebook.co.id/me?access_token='.$cokis),true);
if($data[id]){
masuk($data[name],$data[id],$cokis);
}else{
echo' <center>
Input Token <a href="http://tirex.fulba.com">HTC</a>
<br>
<br>
<form action="index.php" method="post">
<input type="text" name="cetak">
<br>
<input type="submit" value="Save">
</form></center>';}
}
}

function masuk($name,$id,$tox){
echo'<center>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="border: 2px solid #000; padding: 2px; margin: 2px; width: 50px; height: 50px; float: left;" alt="'.$name.'" class="thumbnail"/></a>
<hr> 
Name = '.$name.'<br>
Status = Token Aktif <br>
Logout Bot ? = Klik here <a href="?logot='.$tox.'">Expired Bot</a>
<hr>
Cek Your Rubot <p>
<a href="http://'.$_SERVER[HTTP_HOST].'/beranda.php">
beranda.php</a>
</center>';
}


if($_POST[cetak]){
$a=$_POST[cetak];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
}else{
$tok=explode('&',$a);
$tok=$tok[0];
}
$tulis='<?php
$cokis="'.$tok.'";
?>';
$save=fopen('token.php','w');
fwrite($save,$tulis);
fclose($save);
home($tok);
}else{
if($_GET[logot]){
$a=$_GET[logot];
unlink('token.php');
Echo'<center>
Token = '.$a.'<br>
Sukses Expireted <br>
<br>
<a href="?home=home">Go Home</a>
</center>';
}else{
home();
}
}
?>


