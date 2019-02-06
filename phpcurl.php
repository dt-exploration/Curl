<?php

$curl= curl_init();
$search_string="movies 2015";

$url="https://www.amazon.com/s/filled-keywords=";

curl_setopt($curl, CURLOPT_URL, 'https://www.amazon.com');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
https://images-na.ssl-images-amazon.com/images/I/51r+cYzFbKL._AC_US218_.jpg
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$result=curl_exec($curl);


 ?>
