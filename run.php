<?php
//DataInput
echo "Insert Your File : ";
$file=trim(fgets(STDIN));
$readfile=file_get_contents($file);
//echo "Format file / Extension : ";
//$format=trim(fgets(STDIN));

//Engine
$api_dev_key 			= '5d2d7e1e485494f4c3fc835d02d34153'; // your api_developer_key
$api_paste_code 		= $readfile; // your paste text
$api_paste_private 		= '1'; // 0=public 1=unlisted 2=private
$api_paste_name			= $file; // name or title of your paste
$api_paste_expire_date 		= 'N';
$api_paste_format 		= $format;
$api_user_key 			= file_get_contents("key.txt"); 
$api_paste_name			= urlencode($api_paste_name);
$api_paste_code			= urlencode($api_paste_code);

$url 				= 'https://pastebin.com/api/api_post.php';
$ch 				= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, false); 
curl_setopt($ch, CURLOPT_NOBODY, 0);
$response  			= curl_exec($ch);

//Result
echo "Your Pastebin file URL : ";
echo "\n";
echo "----------------------------------------------";
echo "\n";
echo $response;
echo "\n";
echo "----------------------------------------------";
echo "\n";
?>