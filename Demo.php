<!DOCTYPE html>
<html>
<head>
	<title>LicensePlateLibrary Demo @lugges for GitHub</title>
</head>
<body>

<?php
	require('LicensePlateLib.php');
	use \lugges\LPL\LicensePlateLib;
	$LPL = new LicensePlateLib;

	$generateGermanLicensePlate = $LPL->generateGermanLicensePlate();
	echo $generateGermanLicensePlate."<br>";

	$generateGermanArmyPlate = $LPL->generateGermanArmyPlate();
	echo $generateGermanArmyPlate."<br>";
?>

</body>
</html>