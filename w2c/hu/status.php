<?php
	exec('ps ax | grep "retroshare" | grep -v "grep" | wc -l', $ps_out);
	
	if ($ps_out[0] == '0'){
			echo "<br /><br /><small>Úgy néz ki a csetszervernek problémája akadt, amint lehet megjavítjuk. Ennek ellenére regisztrálhatod a kulcsodat, figyelembe fogjuk venni. Köszönjük a türelmedet.</small>";
	}
	
	else{
		$file_config = parse_ini_file("../config.ini") or die("Can't open config file");
		$nogui_path = $file_config['nogui_path'];
		$server_num = file_get_contents($nogui_path."/STORAGE/lobbyname.txt");
		echo "<br /><br /><small>Tájékoztatásul, az aktuális csetszerver: <strong>".$server_num."</strong>.</small>";
	}
?>
