<?php
namespace lugges\LPL;
// Copyright (c) 2020 Lukas Adrian Kron

class LicensePlateLib
{

	public function generateGermanLicensePlate($region = null, $city = null) {
		include("license-plates.php");
		if ($region == null) {
			$region = array_rand($GermanLicensePlates);
		}
		if ($city == null) {
			$city = array_rand($GermanLicensePlates[$region]);
		}

		$FirstLetter = substr($GermanLicensePlateLetters, random_int(1, 25), 1);
		$SecondLetter = substr($GermanLicensePlateLetters, random_int(1, 25), 1);

		$Length = random_int(1, 2);

		if ($Length == 1) {
			$Letters = $FirstLetter;
		} else {
			$Letters = $FirstLetter.$SecondLetter;
		}

		$cityLength = strlen($city);
		$LettersLength = strlen($Letters);
		$TotalLength = $cityLength + $LettersLength;

		if ($TotalLength > 4 ) {
			$Number = random_int(1, 999);
		} else {
			$Number = random_int(1, 9999);
		}

		echo $city." ".$Letters." ".$Number;
		
	}

	public function generateGermanArmyPlate() {
		echo "Y ".random_int(111, 999)." ".random_int(111, 999);
	}

	public function generateGermanWaterPlate() {
		echo "BW ".random_int(1, 6)." ".random_int(111, 999);
	}

}
?>
