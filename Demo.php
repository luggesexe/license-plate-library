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
	echo $generateGermanLicensePlate."<br>"; // Regular German license plate

	$generateGermanArmyPlate = $LPL->generateGermanArmyPlate();
	echo $generateGermanArmyPlate."<br>"; // German Army license plate

	$generateGermanWaterPlate = $LPL->generateGermanWaterPlate();
	echo $generateGermanWaterPlate."<br>"; // German license plate for the Federal Waterways and Shipping Administration
?>

</body>
</html>