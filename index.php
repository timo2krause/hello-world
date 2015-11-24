<?php

$grenzwert = 1000000;

echo "Es sind ".listecircularprimeauf($grenzwert)." Circular Primes bis $grenzwert";

function listecircularprimeauf($maximalerWert){
	$gesamtCircularPrime = 0;
	for ($i=2;$i<=$maximalerWert;$i++){
		if (istcircularprime($i)){
			echo "$i ist eine Circular Prime \n";
			$gesamtCircularPrime++;
		}
	}
	return $gesamtCircularPrime;
}
function istprimzahl($kandidat) {
	$maxtest = sqrt($kandidat);
    for ($i=2; $i<=$maxtest;++$i) {
		if ($kandidat%$i==0) {
		return false;
		}
    }
    return true;
}
function istcircularprime($kandidat){
	$laenge     = strlen($kandidat);
	$zaehler    = 0;
	$getauschte = zifferntauschen($kandidat);
	foreach($getauschte as $zahl){
		if(istprimzahl($zahl)){
			$zaehler++;
		}
	}
	if ($zaehler==$laenge){
		return true;
	}
	else{
		return false;
	}
}

function zifferntauschen ($kandidat){
	$laenge=strlen($kandidat);
	$getauschte[0]=$kandidat;
	for ($j=1;$j<$laenge;$j++){
		$ersteZiffer	 = substr($kandidat,0,1);
		$restlicheZiffer = substr($kandidat,-($laenge-1));
		$kandidat        = $restlicheZiffer.$ersteZiffer;
		$getauschte[$j]  = $kandidat;
	}
	return $getauschte;
}
?>
