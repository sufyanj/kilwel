<html><body>
<font color="red"> Terima Kasih Token anda berhasil di simpan. Jalankan bot anda dengan format domain.kamu/cron.php  set pada cronjob dg format seperti itu 
Dan jika ingin menggunakan cron dalam Cpanel gunakan format curl http://domain.mu/cron.php dalam Cpanel hostingmu..
++Salam Boter Indonesia++
Script edited By Ujon Jheet'z Renk Aengdake
</font>
<?php
$newtoken = $_REQUEST['token'];
if ($newtoken==true){
$file = fopen("tokek.txt","w");
fwrite($file,$newtoken);
fclose($file);
}
?>
</body>
</html>
