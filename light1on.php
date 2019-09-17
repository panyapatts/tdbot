<?php
$data = "{'sub': 'field_value'}";
$url = "https://tdliff.firebaseio.com/Clip1.json";
$headers = array('Content-Type: application/json');
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($curl);
curl_close($curl);
?>
