<?php
$api_dev_key 		= '5d2d7e1e485494f4c3fc835d02d34153';
$api_user_key 		= file_get_contents("key.txt");
$api_results_limit 	= '100';
$url 			= 'https://pastebin.com/api/api_post.php';
$ch 			= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=list&api_user_key='.$api_user_key.'&api_dev_key='.$api_dev_key.'&api_results_limit='.$api_results_limit.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, false);
curl_setopt($ch, CURLOPT_NOBODY, 0);
$response  		= curl_exec($ch);

//echo $response;
echo strip_tags($response,'<paste_key> </paste_key>');

?>