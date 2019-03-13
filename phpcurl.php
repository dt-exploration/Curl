<?php

$konekt=curl_init();
$url="https://www.google.com";
curl_setopt($konekt, CURLOPT_URL, $url);
//curl_setopt($konekt,CURLOPT_RETURNTRANSFER,1);

$file=fopen("dt.txt", "w");
curl_setopt($konekt, CURLOPT_FILE, $file);
curl_exec($konekt);
curl_close($konekt);
fclose($file);
*/
$url =  "https://www.google.com";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_HEADER,true);
curl_setopt($ch, CURLOPT_NOBODY,true);

$output = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo "$http_code";

?>
