<?php
$data = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
$data2 = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
$data3 = json_decode( file_get_contents('https://api.mercadolibre.com/users/226384143/'), true );
echo $data['nickname'];
echo $data2['user_type'];
echo $data3['country_id'];

