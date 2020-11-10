<?php

function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$dataIndo = get_CURL('https://apicovid19indonesia-v2.vercel.app/api/indonesia/more');

// Waktu Update
$indo_update = date_create($dataIndo['total']['lastUpdate']);
$indo_update_date = date_format($indo_update, "d F Y");
$indo_update_time = date_format($indo_update, "h:i:s");

$dataProv = get_CURL('https://apicovid19indonesia-v2.vercel.app/api/indonesia/provinsi/more');

$dataBtg = get_CURL('https://covid19.kaltimprov.go.id/api/kasus');
