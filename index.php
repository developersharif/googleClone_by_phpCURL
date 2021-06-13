<?php
/**
author: developersharif
*/
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL=>"https://www.google.com/search?q=developersharif",
CURLOPT_CUSTOMREQUEST=>'GET'
));
curl_exec($ch);
curl_close($ch);