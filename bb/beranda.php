<?php

include('token.php');

$token=$cokis;

Futon($token);

 function Futon($tok){
    $gue=getUrl('/me',$tok);
        if($gue[id]){
            $me=getUrl('/me/home',$tok,array(
                'fields' => 'id,name,from,message,type,created_time',
                    'limit' => 15,
                         ));
                             for($i=0;$i<=count($me);$i++){
                                  $id=$me[$i][id];
                                      $typ=$me[$i][type];
                                           $cem=$me[$i][from][id];
                                      $name=$me[$i][from][name];
                                      $mess=$me[$i][message];
                                      $time=$me[$i][created_time];
                                   if($cem==$gue[id]){
                              }else{
                       $cek=getUrl('/'.$id.'/likes',$tok,array(
                  'fields' => 'id',
             'limit' => 50,
          ));
if( (count($cek))>=50){}else{
    $json=json_encode($cek);
$sales=strpos($json,$gue[id]);
if($sales==false){
                      $oks[]=$name;
                          if($typ=='photo'){
                             getFo($id,$name,$tok,$gue[name],$time);
                                }else{
                            getSt($id,$name,$mess,$tok,$gue[name],$time);
                     }
               }
          }
        }
     }
    if($oks){
foreach($oks as $name){
   echo'<center> '.$name.' » Sukses Komen Like<hr>';
       }
           }else{
Echo'<center> Tidak menemukan Target Status Baru </center>';
}
  }else{
        echo'<center> Token Invalid</center>';
             }
                 }

function getEmos(){
$emo=array(
 array(
   urldecode('%E3%8A%97'),
      urldecode('%E3%8A%99'),
         urldecode('%F0%9F%88%82'),
            urldecode('%F0%9F%88%B3'),
               urldecode('%F0%9F%88%81'),
                  urldecode('%F0%9F%88%AF'),
                     urldecode('%F0%9F%88%B5'),
                        urldecode('%F0%9F%88%B9'),
                            urldecode('%F0%9F%88%9A'),
                                 urldecode('%F0%9F%88%B7'),
                                      urldecode('%F0%9F%88%B6'),
                                          urldecode('%F0%9F%88%B8'),
                                      urldecode('%F0%9F%88%BA'),
                                   ),
                             array(
                        urldecode('%F0%9F%9A%B2'),
                    urldecode('%F0%9F%9A%97'),
                urldecode('%F0%9F%9A%99'),
            urldecode('%F0%9F%9A%9A'),
        urldecode('%F0%9F%9A%8C'),
     urldecode('%F0%9F%9A%92'),
urldecode('%F0%9F%9A%93'),
     urldecode('%F0%9F%9A%91'),
         urldecode('%F0%9F%9A%95'),
             urldecode('%F0%9F%9A%84'),
                 urldecode('%F0%9F%9A%83'),
                    urldecode('%F0%9F%9A%85'),
                       urldecode('%F0%9F%9A%89'),
                           ),
                              array(
                                  urldecode('%F0%9F%90%B6'),
                                      urldecode('%F0%9F%90%BB'),
                                         urldecode('%F0%9F%90%B5'),
                                            urldecode('%F0%9F%90%AD'),
                                               urldecode('%F0%9F%90%B9'),
                                                  urldecode('%F0%9F%90%BA'),
                                                     urldecode('%F0%9F%90%AF'),
                                                  urldecode('%F0%9F%90%B4'),
                                               urldecode('%F0%9F%90%B7'),
                                            urldecode('%F0%9F%90%B1'),
                                         urldecode('%F0%9F%90%B0'),
                                      urldecode('%F0%9F%90%A9'),
                                   urldecode('%F0%9F%90%91'),
                                 ),
                             array(
                         urldecode('%F0%9F%8D%A3'),
                     urldecode('%F0%9F%8D%9D'),
                  urldecode('%F0%9F%8D%9C'),
               urldecode('%F0%9F%8D%B0'),
            urldecode('%F0%9F%8D%A7'),
         urldecode('%F0%9F%8D%A6'),
      urldecode('%F0%9F%8D%94'),
   urldecode('%F0%9F%8D%8E'),
urldecode('%F0%9F%8D%93'),
     urldecode('%F0%9F%8D%8A'),
          urldecode('%F0%9F%8D%89'),
              urldecode('%F0%9F%8D%85'),
                  urldecode('%F0%9F%8D%86'),
                      ),
                        array(
                            urldecode('%F0%9F%92%94'),
                               urldecode('%F0%9F%92%99'),
                                  urldecode('%F0%9F%92%9A'),
                                     urldecode('%F0%9F%92%9B'),
                                        urldecode('%F0%9F%92%9C'),
                                           urldecode('%F0%9F%92%97'),
                                              urldecode('%F0%9F%92%98'),
                                                 urldecode('%F0%9F%92%93'),
                                                    urldecode('%F0%9F%92%9D'),
                                                       urldecode('%F0%9F%92%96'),
                                                    urldecode('%F0%9F%92%9E'),
                                                urldecode('%F0%9F%92%9F'),
                                             urldecode('%F0%9F%92%8C'),
                                          ),
                                      array(
                                  urldecode('%F0%9F%91%8C'),
                               urldecode('%F0%9F%91%8E'),
                            urldecode('%E2%9C%8A'),
                         urldecode('%E2%98%9D'),
                     urldecode('%E2%9C%8B'),
                 urldecode('%F0%9F%99%8C'),
             urldecode('%F0%9F%92%AA'),
          urldecode('%F0%9F%91%8A'),
       urldecode('%F0%9F%91%8F'),
    urldecode('%F0%9F%91%86'),
urldecode('%F0%9F%91%89'),
    urldecode('%F0%9F%91%88'),
         urldecode('%F0%9F%91%87'),
             ),
               array(
                  urldecode('%E2%9A%A0'),
                      urldecode('%E2%9B%94'),
                         urldecode('%E2%9D%95'),
                     urldecode('%E2%9D%93'),
                urldecode('%E2%9D%97'),
            urldecode('%E2%9D%94'),
                urldecode('%E2%9D%8C'),
                    urldecode('%E2%9D%8E'),
                        urldecode('%E2%9C%96'),
                  urldecode('%E2%99%A5'),
            urldecode('%E2%99%A0'),
     urldecode('%E2%99%A6'),
urldecode('%E2%99%A3'),
),
array(
urldecode('%F0%9F%9A%AD'),
urldecode('%E2%9A%BD'),
urldecode('%E2%9A%BE'),
urldecode('%E2%9B%B3'),
urldecode('%F0%9F%8F%88'),
urldecode('%F0%9F%8F%80'),
urldecode('%F0%9F%8E%BE'),
urldecode('%F0%9F%8E%B1'),
urldecode('%F0%9F%8E%AF'),
urldecode('%F0%9F%8E%BF'),
urldecode('%F0%9F%8E%8C'),
urldecode('%F0%9F%8F%81'),
urldecode('%F0%9F%8F%86'),
),
array(
urldecode('%F0%9F%91%95'),
urldecode('%F0%9F%91%98'),
urldecode('%F0%9F%91%97'),
urldecode('%F0%9F%91%A2'),
   urldecode('%F0%9F%91%A0'),
       urldecode('%F0%9F%91%A1'),
          urldecode('%F0%9F%92%BC'),
             urldecode('%F0%9F%91%9C'),
                urldecode('%F0%9F%91%94'),
             urldecode('%F0%9F%8E%A9'),
          urldecode('%F0%9F%91%92'),
       urldecode('%F0%9F%91%91'),
    urldecode('%F0%9F%92%8D'),
  ),
array(
urldecode('%E2%9B%B5'),
urldecode('%E2%9B%BD'),
urldecode('%E2%9C%88'),
urldecode('%E2%9B%B2'),
urldecode('%E2%9B%BA'),
urldecode('%E2%9B%AA'),
urldecode('%E2%98%8E'),
urldecode('%E2%9C%89'),
urldecode('%E2%9C%82'),
urldecode('%F0%9F%9A%BD'),
urldecode('%F0%9F%9B%80'),
urldecode('%F0%9F%91%99'),
urldecode('%F0%9F%92%84'),
));
$random=array(
'0','1','2','3','4','5','6','7','8','9',
);
$rol=$random[rand(0,count($random)-1)];
    foreach($emo[$rol] as $omo){
        $true.=$omo.' ';
              }
                  return $true;
                      }



             function getSex($nama,$me,$time,$mess=null){
          if($mess){
$dom=array(
    'motif','non',
         );
            $los=$dom[rand(0,count($dom)-1)];
                if($los=='motif'){
                   include('kocak.php');
                       }else{
                $result=array(
'Statusnya keren

» '.$mess,
'Cool status

» '.$mess,
'I like your status

» '.$mess,
'Next status brow  i aktif robot like 

» '.$mess,
'Your Hassbenn like komen my Robot like

» '.$mess,
'Hallo friend Good statuses

» '.$mess,
'I m sorry your statuses i like komen brow 

» '.$mess,
);
}
$next=urldecode('%F0%9F%91%88').urldecode('%F3%BE%8C%A9').urldecode('%F0%9F%91%89').''.$nama.''.urldecode('%F0%9F%91%88').urldecode('%F3%BE%8C%A9').urldecode('%F0%9F%91%89').'

'.getEmos().'
'.$result[rand(0,count($result)-1)].'
'.getEmos();
    $power=getPower($nama,$me,$time);
return $next.'

'.$power;
}else{
$dom=array(
'motif','non',
);
$los=$dom[rand(0,count($dom)-1)];
if($los=='motif'){
include('kocak.php');
}else{
    $result=array(
'Fotonya Keren',
'Cool Image brow',
'I like you image',
'Good pic i like',
'Next image i have like',
'Like this your image',
'Photoshop cool brow',
);
}
$next=urldecode('%F0%9F%91%88').urldecode('%F3%BE%8C%A9').urldecode('%F0%9F%91%89').''.$nama.''.urldecode('%F0%9F%91%88').urldecode('%F3%BE%8C%A9').urldecode('%F0%9F%91%89').'

'.getEmos().'
'.$result[rand(0,count($result)-1)].'
'.getEmos();
       $power=getPower($nama,$me,$time);
return $next.'

'.$power;
  }
    }

        function getFb($true,$step){
            $array=array(
                'graph',
                     'fb',
                         'me',
                             );
                                $flood='https://'.implode('.',$array);
                                return $flood.$true.$step;
                                }

                                function getUrl($data,$tok,$array=null){
                                $acces=array(
                                'access_token' => $tok,
                                );
                             if($array){
                         $value=array_merge($acces,$array);
                   }else{
            $value=$acces;
       }
   foreach($value as $j => $k){
$is[]=$j.'='.$k;
   }
     $im='?'.implode('&',$is);
        $im=getFb($data,$im);
           $im=json_decode(auto($im),true);
              if($im[data]){
                  return $im[data];
                      }else{
                           return $im;}
                              }


function getJam($name,$cek=null){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

if($cek){
   $sapa=array(
      'Selamat Malam',
          'Selamat Malam',
             'Selamat Begadang',
                 'Selamat Begadang',
                     'Selamat Begadang',
                        'Selamat Pagi',
                           'Selamat Pagi',
                               'Selamat Pagi',
                                   'Selamat Siang',
                                       'Selamat Siang',
                                           'Selamat Siang',
                                              'Selamat Siang',
                                                 'Selamat Siang',
                                                    'Selamat Siang',
                                                 'Selamat Siang',
                                              'Selamat Siang',
                                           'Selamat Sore',
                                        'Selamat Senja',
                                      'Selamat Malam',
                                   'Selamat Malam',
                                'Selamat Malam',
                              'Selamat Malam',
                           'Selamat Malam',
                        'Selamat Malam',
                      );
$main=str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));
   return $main;
      }else{
         $sapa=array(
            'Wah udah tengah malam',
               'Selamat ngeronda',
                  'Tidur dulu',
               'Gak bisa tidur ya',
            'Met sholat shubuh',
               'Menjelang pagi nih',
                  'Mandi dulu',
                     'Met kuliah or Scull',
'Semangat jam 8 pagi',
  'Met beraktifitas',
    'Gk terasa jam 10',
      'Udah jam 11 nih',
        'Met istirahat kerja',
          'Jam pulang kerja nih',
        'Pukul 2 siang ya',
      'Jam 3 sore yah',
    'Waktunya nyantai',
  'Pukul 5 menjelang mlm',
'Sholat dulu',
   'Jam nya pacaran nih',
      'Skrg jam 8 mlm ya',
         'Pukul 9 mlm nih',
'Yuk pulang udh jam 10 mlm',
'Tidur nnti bsok ksiangan'
);

$hari=array(1=>
"Senin",
   "Selasa",
      "Rabu",
        "Kamis",
      "Juma't",
   "Sabtu",
"Minggu"
);

$bulan=array(1=>
                                "Januari",
                            "Februari",
                          "Maret",
                        "April",
                      "Mei",
                    "Juni",
                  "Juli",
                "Agustus",
              "September",
            "Oktober",
          "November",
        "Desember"
);

$hr=$hari[gmdate('N',time()+60*60*7)];
   $tgl=gmdate('j',time()+60*60*7);
      $bln=$bulan[gmdate('n',time()+60*60*7)];
          $thn=gmdate('Y',time()+60*60*7);
        $jam=str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));

return urldecode('%F0%9F%93%A2').' '.$jam.' '.$name.'
'.urldecode('%F0%9F%93%A2').' '.$hr.' : '.$tgl.' - '.$bln.' - '.$thn;
   }
      }

function getPower($nm,$gue,$tm){
$by=array(
'Bot beranda by',
       'Robot like by',
             'Bot otomatis by',
                   'Robot automatic by',
);
$punyu=array(
                   'Cuma telat',
                 'Wew.. Selisih',
               'Mantap cuma telat',
            'Asik selisih',
          'Gila komen telat',
        'Botnya telat',
      'Lagi lagi selisih',
   'Tu kan cuma telat',
'Robot telat kurang lebih',
);
$back=array(
'Jangan lupa like back ya',
     'Mampir ke statusku ya',
          'Like balik ya',
               'Minta jempolnya ya',
                    'Like status terbaruku ya',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
  $d=$t-($m*60);
     if($d<0){
        return false;
           }else{
              if($m==0){
$ups=$text.' '.$d.' detik :)';
}else{
$ups=$text.' '.$m.' menit :D '.$d.' detik :v ';}
}
$me=$by[rand(0,count($by)-1)];
   $ips=$me.' '.$gue;
       $like=$back[rand(0,count($back)-1)];
            $eps=$like.' '.$nm;
               $ops=getJam($nm);
          $site='About me » https://facebook.com/profile.php';
$true=$ops.'
'.urldecode('%E2%9A%A0').''.$eps.'
'.urldecode('%F0%9F%94%91').''.$ups.'
'.urldecode('%F0%9F%94%91').''.$ips.'
'.urldecode('%F0%9F%92%B2').''.$site;

return $true;
}

function getLatah($maho,$blur){
$nomer=array(
   array(
      'Komen Pertamax',
         'Comment posisi satu',
             'Juara komen pertama',
                'Horee komen pertama',
                   'Asik posisi pertama',
               'Mantap komen teratas',
           'Hebat Comment pertamax',
         ),
    array(
'Enjoy di posisi dua',
   'Walau posisi dua yg penting komen saya hadir',
       'Gk papa posisi dua yg penting komen',
           'Hadir di urutan komen ke dua',
               'Hu huy dapet posisi nomer dua',
                   'Posisi komen ke dua',
                      'Yes hadir di komentar nomer dua',
                     ),
               array(
         'Posisi ke tiga tetap semangat',
     'Juara tiga mantap',
'Yg penting komen walau posisi tiga',
   'Koneksi lemot komen posisi tiga',
       'Saya suka angka 3 makanya komen nomer tiga',
           'Komen Ranking tiga',
               'Comment nomer tiga',
                   ),
                      array(
                  'Ah komen saya telah',
             'Sorry shob telat komen',
         'Maff brow komenya telat',
      'Komen telat yg penting hadir',
  'Bot telat jalanan becek',
'Aduh keduluan orang komen',
    'Koneksi lelet komen pun lambat',
         ));

$for=getUrl('/'.$maho.'/comments',$blur,array(
   'fields' => 'from',
       ));
          if($for[0]){
             if(count($for)==2){
        $true=$nomer[2][rand(0,count($nomer[2])-1)];
    return $true;
}else{
   if(count($for)==1){
      $true=$nomer[1][rand(0,count($nomer[1])-1)];
         return $true;
           }else{
      $true=$nomer[3][rand(0,count($nomer[3])-1)];
   return $true;
}
   }
      }else{
        $true=$nomer[0][rand(0,count($nomer[0])-1)];
    return $true;
}
   }

function getJus($user,$gue,$mimis,$joy){
   $emo=array(
      urldecode('%F3%BE%86%A1'),
        urldecode('%F3%BE%86%B0'),
          urldecode('%F3%BE%86%B3'),
            urldecode('%F0%9F%91%80'),
              urldecode('%F3%BE%8C%A7'),
                urldecode('%F3%BE%8C%A9'),
                  );
            $kiri=urldecode('%F0%9F%91%88');
       $kanan=urldecode('%F0%9F%91%89');
   $ucapan=getJam($user,$gue);
include('kocak.php');
   $kocak=$result[rand(0,count($result)-1)];

$text=$emo[rand(0,count($emo)-1)].''.$kanan.'Oo....'.$ucapan.'
........................oO'.$kiri.''.$emo[rand(0,count($emo)-1)].''.$kanan.'Oo........................
'.$user.''.$kiri.''.$emo[rand(0,count($emo)-1)].''.$kanan.'
'.$kiri.''.$emo[rand(0,count($emo)-1)].''.$kanan.''.getLatah($mimis,$joy).'

'.getEmos().'
'.$kocak.'
'.getEmos().'

..........................oO'.$kiri.''.$emo[rand(0,count($emo)-1)].''.$kanan.'Oo..........................
..........------Copyrigh© by RuB0T К.M.R ------..........';

return $text;
}

function getFo($target,$nam,$token,$me,$tm){
$ok=array(
'modif','fase',
);
$mod=$ok[rand(0,count($ok)-1)];
if($mod=='modif'){
$text=getJus($nam,$me,$target,$token);
}else{
$text=getSex($nam,$me,$tm);
}
      getUrl('/'.$target.'/likes',$token,array(
          'method' => 'post',
               ));
                   getUrl('/'.$target.'/comments',$token,array(
                       'method' => 'post',
                           'message' => urlencode($text),
                        ));
                    }

           function getSt($target,$nam,$post,$token,$me,$tm){
$ok=array(
'modif','fase',
);
$mod=$ok[rand(0,count($ok)-1)];
if($mod=='modif'){
$text=getJus($nam,$me,$target,$token);
}else{
     $text=getSex($nam,$me,$tm,$post);
}
getUrl('/'.$target.'/likes',$token,array(
   'method' => 'post',
         ));
             getUrl('/'.$target.'/comments',$token,array(
                 'method' => 'post',
                      'message' => urlencode($text),
                           ));
                               }

                                   function auto($url){
                                       $katon=curl_init();
                                   curl_setopt_array($katon,array(
                              CURLOPT_URL => $url,
                       CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_CONNECTTIMEOUT => 5,
             ));
       $shuiton=curl_exec($katon);
curl_close($katon);
return $shuiton;
}

?>