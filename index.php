<?php 
//ColorFill
$redgreen="\e[0;31;42m";
$cyanblack="\e[0;36;40m";
$DarkLight="\e[1;30;47m";



//BatasColor
$batas="\e[0m\n";



echo $DarkLight."<==========================================================>";
echo "  888888                   888
     88b                   888
     888                   888
     888 88888b.   .d8888b 888  888
     888 888  88b d88P     888 .88P  v1.0 Relased Official
     888 888  888 888      888888K  Github.com/jnckcode
     88P 888  888 Y88b.    888  88b
     888 888  888   Y8888P 888  888
   .d88P
 .d88P 	Pastebin Uploader
888P";
echo "\n";
echo "<=======================[JnckCode]=========================>";
echo "\n";
echo <<<EOF
1. User
2. Upload
3. List
4. Delete
5. Close / Exit
EOF;
echo "\n";
echo "<=======================[JnckCode]=========================>";
echo "\n";
$pilih=readline('Pilih menu :');
echo "\n";
echo "<==========================================================>";

switch((int)$pilih){
case 1:
include ('user.php');
break;
case 2:
include ('run.php');
break;
case 3:
include ('list.php');
break;
case 4:
include ('delete.php');
break;
case 5:
exit("Tools Closed ....xxxxxx"."\n");
default:
exit("Pilihan Salah"."\n");
break;
}

echo PHP_EOL;
?>