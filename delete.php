<?php
echo "Masukan ID Paste :";
$id=trim(fgets(STDIN));


$api_dev_key 		= '5d2d7e1e485494f4c3fc835d02d34153';
$api_user_key 		= file_get_contents("key.txt");
$api_paste_key 		= $id;
$url 			= 'https://pastebin.com/api/api_post.php';
$ch 			= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=delete&api_user_key='.$api_user_key.'&api_dev_key='.$api_dev_key.'&api_paste_key='.$api_paste_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, false);
curl_setopt($ch, CURLOPT_NOBODY, 0);

$response  		= curl_exec($ch);
echo $response;

?>