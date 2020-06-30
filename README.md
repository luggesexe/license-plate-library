# license-plate-library - Simple license plate generator
 
> Simple license plate generator for the Federal Republic of Germany (FRG).

## Basic Usage
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
  // At the current time region just accepts "NRW" and the city parameter any city code from the given array.
  
  $generateRandomFromNRW = $LPL->generateGermanLicensePlate("NRW");
```

## Region codes

| Country       | Region code   | Translation   |
| ------------- | ------------- | ------------- |
| Germany  | NRW  | North Rhine-Westphalia  |

