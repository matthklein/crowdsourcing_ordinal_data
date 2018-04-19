<?php
	$data = $_POST['data'];
	$fname = $_POST['fname'].'.txt';
	if (strlen($data) > 0){
		$file = fopen("/var/www/html/collected_data/".$fname, 'a+');  //creates new file
		fwrite($file, $data."\n");
		fclose($file);
	}
?> 
