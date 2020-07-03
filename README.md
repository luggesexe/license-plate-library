# 🚗 license-plate-library - Simple license plate generator
 
> Simple license plate generator for the Federal Republic of Germany (FRG).

![license plate](https://github.com/luggesexe/license-plate-library/blob/master/LPL.png)

## 📖 Basic Usage
All functions are located in the `\lugges\LPL\LicensePlateLib` class.

This example shows you how to generate a license plate for the FRG.

```php
// First require and use the Library
require('LicensePlateLib.php');
use \lugges\LPL\LicensePlateLib;
  
// Create a new license plate Library instance
$LPL = new LicensePlateLib;
  
// Generate the license plate
$generate = $LPL->generateGermanLicensePlate();
echo $generate;
  
// The generateGermanLicensePlate(); function accepts a region and a city parameter.
// The accepted region parameters are stated below.
// The city parameter is any city code from the given array.
  
$generateRandomFromNRW = $LPL->generateGermanLicensePlate("NRW");
```
## 🧮 Functions
```php
generateGermanLicensePlate($region, $city); // Regular German license plate
generateGermanArmyPlate(); // German Army license plate
generateGermanWaterPlate(); // German license plate for the Federal Waterways and Shipping Administration
```

## 🏙️ Region codes

| Country       | Region code   | Translation   |
| ------------- | ------------- | ------------- |
| Germany  | NRW  | North Rhine-Westphalia  |
| Germany  | BV  | Bavaria  |
| Germany  | BW  | Baden-Württemberg  |
| Germany  | H  | Hamburg  |
| Germany  | B  | Berlin  |

## 📝 Questions and Feedback
If you have any questions feel free to open an Issue.
Feedback is appreciated.
Found a typo or want to help? Contributions are welcome.
