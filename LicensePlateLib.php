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
		
		$Length = random_int(1, 2);
		$StartFL = random_int(1, 25);
		$StartSL = random_int(1, 25);


		$FirstLetter = substr($GermanLicensePlateLetters, $StartFL, 1);
		$SecondLetter = substr($GermanLicensePlateLetters, $StartSL, 1);

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
		$FNumberBlock = random_int(111, 999);
		$SNumberBlock = random_int(111, 999);
		echo "Y ".$FNumberBlock." ".$SNumberBlock;
	}

}
?>
