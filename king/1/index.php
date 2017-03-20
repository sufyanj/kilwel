<link rel="icon" type="image/x-icon" href="http://blogs-images.forbes.com/parmyolson/files/2012/08/anonymous_logo.png"> <title>Script By sufyan jan</title>
    <link rel="stylesheet" type="text/css" href="a.css" media="all,handheld"/>

﻿<?php
error_reporting(0);
function home($indonesia=null){
if($indonesia){
echo' <center>


Token Saved <p>
<a href="react.php" target="_blank">
<input class="button button4" type="button" value="Check Reaction "> </a>
<P>
<a href="" target="_blank">
<input class="button button3" type="button" value="Set Cron Jobs"> </a><br>


For Reaction <input class="" type="" value="http://'.$_SERVER[HTTP_HOST].'/react.php "> </a>

<hr> 
';
}else{
include('token.php');
$data=json_decode(file_get_contents('https://graph.facebook.co.id/me?access_token='.$cokis),true);
if($data[id]){
masuk($data[name],$data[id],$cokis);
}else{
echo' <center>
<a href="" target="_blank">
<input class="button button1" type="button" value="Use Token Iphone "> </a><br>
<a href="http://kundchatten.se/token/" target="_blank">
<input class="button button4" type="button" value="Get Token From Here "> </a>


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
echo'<center><a href="http://facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture?type=large" alt="Designer_&_Developer" style="border-radius: 99em; border: 2px; box-shadow: 0px 0px 9px 5px rgb(204, 204, 204); padding: 0px;" width="140" height="140"/></a><br><br<<br<<br</br>


<hr> 
Name -: <a href="https://facebook.com/'.$id.'" target="_blank">
<input class="button button4" type="button" value="'.$name.' "> </a><br>
Status -: <input class="button button1" type="button" value="Bot Activited "> </a><br>
Remove Bot -: <a href="?logot='.$tox.'" target="_blank">
<input class="button button4" type="button" value="Click Here "> </a><br><br></br>

<hr>

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

Token Deleted <br>
<br>
<a href="?home=home" target="_blank">
<input class="button button2" type="button" value="Go Home "> </a><br>

</center>';
}else{
home();
}
}
?>
<br>
• Script Bot • &copy; 2017<br>
Powered By => 
<a href="https://facebook.com/abusufyanj" target="_blank">
<input class="button button4" type="button" value="SUFYAN JAN"> </a>
