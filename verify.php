<?php
$access_token = 'HfnSmBlVMunz39ggqzJa69ySgb3kP3kpZyZWdXQjYhqP1WLdStU6RKHtq2Jw+jqyaiHpY+G3mVo0C5tWGE/OIHcgY/8cNfaael+FJfoAyatrd8sv/dYN4hFsu5QPalOpd+VGv1fAYzBzjiipBhQrvgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
