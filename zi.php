<?php
	$mkdir="Mail_Filter_ALL";
	$o=getopt("l:");
	if(!file_exists("$mkdir/z1.shopx1"))
	{
		$status_dir="BELUM SIAP ANJENKK !!!!...";
		@mkdir("$mkdir");
		@touch("$mkdir/z1.shopx1");
		@file_put_contents("$mkdir/z1.shopx1","Mail-Filter Code By Z1-ShopX1");
		sleep(0);exit();
	}
		else{
			$status_dir="READY ";
		}

printf("
*==== EMAIL FILTER CLI - Coded By Zi-ShopX1 ==========*
 | Filter : ALL MAIL
 | Status : ".$status_dir." 
 | Usage  : php filter.php -l listmu.txt
 | Author : Zio-Alfino
 *==========================================================*\n");;
 echo "Please wait ...";
 sleep(0);echo "\n";
 function simpenkontl($tt,$oo){
 	$fp=fopen($GLOBALS['mkdir']."/".$tt."-".date('dmY').".txt", 'a');
 	fwrite($fp,$oo."\n");
 	fclose($fp);}
 	function filter($email,$regex){
    return preg_match("/([aA-zZ]*.)(\@".$regex.")\.([aA-zZ]+)/",$email);}
 		if(isset(
 			$o['l']))
 			{
 				$m="\033[1;31m"; 
 				$k="\033[1;33m"; 
 				$h="\033[1;32m"; 
 				$b="\033[1;34m"; 
 				$c="\033[0m";
 				$m2="\033[0;31m"; 
 				$k2="\033[0;33m"; 
 				$h2="\033[0;32m"; 
 				$b2="\033[0;34m"; 
 				$Red="\033[0;31m";	       # Red
				$Green="\033[0;32m";        # Green
				$Yellow="\033[0;33m";       # Yellow
				$Blue="\033[0;34m";         # Blue
				$Purple="\033[0;35m";       # Purple
				$Cyan="\033[0;36m";         # Cyan
				$White="\033[0;37m";        # White
 				$BRed="\033[1;31m";         # Red
				$BGreen="\033[1;32m";       # Green
				$BYellow="\033[1;33m";      # Yellow
				$BBlue ="\033[1;34m";        # Blue
				$BPurple="\033[1;35m";      # Purple
				$BCyan="\033[1;36m";        # Cyan
				$BWhite="\033[1;37m";       # White

 		$lmail=array(
 			"yahoo",
 			"bellsouth",
 			"comcast",
 			"att",
 			"verizon",
 			"sbcglobal",
 			"msn",
 			"hotmail",
 			"live",
 			"yandex",
 			"optonline",
 			"aol",
 			"gmail",
 			"outlook",
 			"ymail",
 			"cox",
 			"zoho",
 			"t-online",
 			"gmx",
 			"web",
 			"freemail",
 			"free",
 			"mymail",
 			"nate",
 			"wanadoo",
 			"unistrasi",
 			"netscape",
 			"libero",
 			"tiscali",
 			"me",
 			"mail",
 			"136",
 			"docomo",
 			"i.softbank",
 			"ezweb",
 			"apple"
 		);

 		$mail=explode("\n",file_get_contents($o['l']));
 		foreach($mail as $rmail)
 			{
 				if(filter($rmail,$lmail[0]))
 			{
 			echo "$BBlue Z1-ShopX1 $BGreen] => $BBlue".$rmail."\n";simpenkontl($lmail[0],$rmail);
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 		}
 			elseif (filter($rmail,$lmail[1])) {echo "$BPurple Z1-ShopX1 $BGreen] => $BPurple".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[1],$rmail);}elseif(filter($rmail,$lmail[2])){echo "$m Z1-ShopX1 $BGreen] => $m".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[2],$rmail);}elseif(filter($rmail,$lmail[3])){echo "$m2 Z1-ShopX1 $BGreen] => $m2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[3],$rmail);}elseif(filter($rmail,$lmail[4])){echo "$k2 Z1-ShopX1 $BGreen] => $k2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[4],$rmail);}elseif(filter($rmail,$lmail[5])){echo "$b2 Z1-ShopX1 $BGreen] => $b2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[5],$rmail);}elseif(filter($rmail,$lmail[6])){echo "$h Z1-ShopX1 $BGreen] => $h".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[6],$rmail);}elseif(filter($rmail,$lmail[7])){echo "$h2 Z1-ShopX1 $BGreen] => $h2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[7],$rmail);}elseif(filter($rmail,$lmail[8])){echo "$m Z1-ShopX1 $BGreen] => $m".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[8],$rmail);}elseif(filter($rmail,$lmail[9])){echo "$m2 Z1-ShopX1 $BGreen] => $m2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[9],$rmail);}elseif(filter($rmail,$lmail[10])){echo "$k2 Z1-ShopX1 $BGreen] => $k2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[10],$rmail);}elseif(filter($rmail,$lmail[11])){echo "$b2 Z1-ShopX1 $BGreen] => $b2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[11],$rmail);}elseif(filter($rmail,$lmail[12])){echo "$h Z1-ShopX1 $BGreen] => $h".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[12],$rmail);}elseif(filter($rmail,$lmail[13])){echo "$h2 Z1-ShopX1 $BGreen] => $h2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[13],$rmail);}elseif(filter($rmail,$lmail[14])){echo "$m Z1-ShopX1 $BGreen] => $m".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[14],$rmail);}elseif(filter($rmail,$lmail[15])){echo "$m2 Z1-ShopX1 $BGreen] => $m2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[15],$rmail);}elseif(filter($rmail,$lmail[16])){echo "$k2 Z1-ShopX1 $BGreen] => $k2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[16],$rmail);}elseif(filter($rmail,$lmail[17])){echo "$b2 Z1-ShopX1 $BGreen] => $b2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[17],$rmail);}elseif(filter($rmail,$lmail[18])){echo "$h Z1-ShopX1 $BGreen] => $h".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[18],$rmail);}elseif(filter($rmail,$lmail[19])){echo "$h2 Z1-ShopX1 $BGreen] => $h2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[19],$rmail);}elseif(filter($rmail,$lmail[20])){echo "$m Z1-ShopX1 $BGreen] => $m".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[20],$rmail);}elseif(filter($rmail,$lmail[21])){echo "$m2 Z1-ShopX1 $BGreen] => $m2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[21],$rmail);}elseif(filter($rmail,$lmail[22])){echo "$k2 Z1-ShopX1 $BGreen] => $k2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[22],$rmail);}elseif(filter($rmail,$lmail[23])){echo "$b2 Z1-ShopX1 $BGreen] => $b2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[23],$rmail);}elseif(filter($rmail,$lmail[24])){echo "$h Z1-ShopX1 $BGreen] => $h".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[24],$rmail);}elseif(filter($rmail,$lmail[25])){echo "$h2 Z1-ShopX1 $BGreen] => $h2".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[25],$rmail);}elseif(filter($rmail,$lmail[26])){echo "$Cyan Z1-ShopX1 $BGreen] => $Cyan".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[26],$rmail);}elseif(filter($rmail,$lmail[27])){echo "$Green Z1-ShopX1 $BGreen] => $Green".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[27],$rmail);}elseif(filter($rmail,$lmail[28])){echo "$Red Z1-ShopX1 $BGreen] => $Red".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[28],$rmail);}elseif(filter($rmail,$lmail[29])){echo "$Blue Z1-ShopX1 $BGreen] => $Blue".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[29],$rmail);}elseif(filter($rmail,$lmail[30])){echo "$Purple Z1-ShopX1 $BGreen] => $Purple".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[30],$rmail);}elseif(filter($rmail,$lmail[31])){echo "$Green Z1-ShopX1 $BGreen] => $Green".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[31],$rmail);}elseif(filter($rmail,$lmail[32])){echo "$Cyan Z1-ShopX1 $BGreen] => $Cyan".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[32],$rmail);}elseif(filter($rmail,$lmail[33])){echo "$Red Z1-ShopX1 $BGreen] => $Red".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[33],$rmail);}elseif(filter($rmail,$lmail[34])){echo "$Green Z1-ShopX1 $BGreen] => $Green".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[33],$rmail);}elseif(filter($rmail,$lmail[34])){echo "$Blue Z1-ShopX1 $BGreen] => $Blue".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl($lmail[34],$rmail);}else{echo "$c Z1-ShopX1 $BGreen] => $Cyan".$rmail."\n";
 			echo "$BGreen [ "; echo date('h:i:s A'); echo " ]"; echo "[";
 			simpenkontl("other",$rmail);}}} 

 ?>