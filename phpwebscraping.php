<?php
error_reporting(0);
for ($i = 1; $i <= 32; $i++) {
    $url = 'https://www.bloomberght.com/borsa/hisseler/'.strval($i);

    $file = file_get_contents($url);
    preg_match_all('@ <div class="box box-12">(.*?)</div>@si', $file, $icerik_al);
	
	$icerik = $icerik_al[0][0];
   
    //print_r($icerik);
    
    $hisseler = explode("<tr>",$icerik);
    
    foreach($hisseler as $hisse){
		if(str_contains($hisse,'Q') == false and str_contains($hisse,'Hisse') == false){
		$hisse = strip_tags($hisse);
		$elemanlar = explode("\n",$hisse);
		[$hisse,$son,$dün,$yüzde,$yüksek,$düşük,$lot,$tl] = array(trim($elemanlar[3]),trim($elemanlar[6]),trim($elemanlar[7]),trim($elemanlar[8]),trim($elemanlar[9]),trim($elemanlar[10]),trim($elemanlar[11]),trim($elemanlar[12]));
		print_r("hisse: ".$hisse."\n");	
		print_r("son: ".$son."\n");
		print_r("dün: ".$dün."\n");
		print_r("yüzde: ".$yüzde."\n");
		print_r("yüksek: ".$yüksek."\n");
		print_r("düşük: ".$düşük."\n");
		print_r("lot: ".$lot."\n");
		print_r("tl: ".$tl."\n"."\n"."\n"."\n"."\n");
		};
	};
    
    
}


    

?>