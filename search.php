<?php
$search=$_GET['q'];
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL=>"https://www.google.com/search?q=$search",
CURLOPT_CUSTOMREQUEST=>'GET'
));
curl_exec($ch);
curl_close($ch);