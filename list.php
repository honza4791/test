<?php
require 'TuyaCloud.php';

$tuya = new TuyaCloud([
  "userName" => "oznogg@gmail.com", // username/email to access to SmartLife/Tuya app
  "password" => "CeskeDrahy+2", // password to access to SmartLife/Tuya app
  "bizType" => "tuya", // type ('tuya' or 'smart_life')
  "countryCode" => "420", // Country code (International dialing number), e.g. "33" for France or "1" for USA
  "region" => "eu" // region (az=Americas, ay=Asia, eu=Europe)
]);

// to get a list of your devices
$devices = $tuya->getDevices();
echo strval( $devices ) 
?>
