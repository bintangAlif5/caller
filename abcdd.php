<?php
//*************************************
//* Abcdefuck You :v                  *
//* author : r00t@star                *
//*************************************
error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Asia/Jakarta");
system('clear');
$date=date("d M Y h:i:s a");
$asu="
____    _    _     _     _____ ____
 / ___|  / \  | |   | |   | ____|  _ \
| |     / _ \ | |   | |   |  _| | |_) |
| |___ \033[96m/ ___ \| |___| |___| |___|  _ <
 \____/_/   \_\_____|_____|_____|_| \_\
 ";
echo"$asu";
echo "\n\n";
echo "\033[95m**********************************\n";
echo "\033[00m|\e[36m r00t@Star \e[37m(Call Spamer) \e[0m\n";
echo "|\e[34m powered by Indonesian Wibu\n";
echo "\033[95m**********************************\n";
echo "\e[33m (nomor)-> \e[32m";
$nomor = trim(fgets(STDIN, 1024));
$ch = curl_init('http://nakocoders.org/boom/boom.php');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch,CURLOPT_POST,TRUE);
curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
curl_setopt($ch,CURLOPT_COOKIEFILE, $config);
curl_setopt($ch,CURLOPT_COOKIEJAR,  $config);
curl_setopt($ch,CURLOPT_POSTFIELDS,"nomor=$nomor");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$result = curl_exec($ch);
if(empty($result)){
}elseif(preg_match('/Berhasil/i',$result)){
      echo "-------\033[1;31m Status Info \e[0m-------\n";;
    echo "STATUS:\e[36m DONE \e[0m\n";
    echo "TARGET:\e[36m $nomor \e[0m\n";
    echo "DATE  :\e[36m [$date] \e[0m\n";
    echo "\e[36m r00t@star \e[37m(Boom. Call :v)  \e[0m\n";
}else{
      echo "-------\033[1;31m Status Info \e[0m-------\n";;
    echo"STATUS:\033[1;31m[GAGAL]\e[0m\n";
    echo"TARGET:[$nomor]\n";
    echo"DATE  :[$date]\n";
    echo "\e[36m r00t@star \e[37m(Call Mamtan) \e[0m\n";
}
?>