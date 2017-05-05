<?php 
	$date = $_REQUEST['date'];
	$text = $_REQUEST['text'];
	
	$file = fopen("../recentUpdate.txt","a");
	$str = "[ ".$date." ] ".$text."\r\n";
	
	fwrite($file, $str);
	fclose($file);
	
	echo 'Success.';
?>