<?php
//Color



//UserData
echo "Username :";
$user=trim(fgets(STDIN));
echo "Password :";
$pass=trim(fgets(STDIN));
echo "\n";
echo "<=======================>Generate<=========================>";

//Engine
$api_dev_key 		= '5d2d7e1e485494f4c3fc835d02d34153';
$api_user_name 		= $user;
$api_user_password 	= $pass;
$api_user_name 		= urlencode($api_user_name);
$api_user_password 	= urlencode($api_user_password);
$url			= 'https://pastebin.com/api/api_login.php';
$ch			= curl_init($url);

curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_dev_key='.$api_dev_key.'&api_user_name='.$api_user_name.'&api_user_password='.$api_user_password.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, false);
curl_setopt($ch, CURLOPT_NOBODY, 0);
$response 		= curl_exec($ch);

//Save
$save=fopen("key.txt",'w');
fwrite($save,$response);
fclose($save);


//Result
echo "Your User KEY was generated : ";
echo "\n";
echo "----------------------------------------------";
echo "\n";
echo $response;
echo "\n";
echo "----------------------------------------------";
echo "\n";
echo "Your API code was Saved To Key.txt !";
echo "\n";
include "index.php";

?>