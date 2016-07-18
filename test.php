<?php
function __autoload($classname) {
    $filename = "./". $classname .".php";
    include_once($filename);
}
$pete = TrackerDriverFactory::onlyNames("mbutcher","[TC] Pete");
$ronald = TrackerDriverFactory::onlyNames("n3ox","Ronald");
$elmo = TrackerDriverFactory::onlyNames("Degats","[TC] Elmo");

$timeArray = array(
  TrackerTimeFactory::completeTime("FXO",floatval("80.12"),array(floatval("30.15"),floatval("59.88"))),
  TrackerTimeFactory::completeTime("XRT",floatval("0"),array("0","0")),
  TrackerTimeFactory::completeTime("RB4",floatval("0"),array("0","0")));
$pete->set_times($timeArray);

$timeArray = array(
  TrackerTimeFactory::completeTime("XRT",floatval("80.52"),array(floatval("30.05"),floatval("60.10"))),
  TrackerTimeFactory::completeTime("FXO",floatval("0"),array("0","0")),
  TrackerTimeFactory::completeTime("RB4",floatval("0"),array("0","0")));
$ronald->set_times($timeArray);

$timeArray = array(
  TrackerTimeFactory::completeTime("RB4",floatval("81.01"),array(floatval("30.25"),floatval("59.99"))),
  TrackerTimeFactory::completeTime("XRT",floatval("0"),array("0","0")),
  TrackerTimeFactory::completeTime("FXO",floatval("0"),array("0","0")));
$elmo->set_times($timeArray);

$myTracker = TrackerFactory::initTracker("TC Summerbreak","19:00 2016-07-31","FE2",array("FXO","XRT","RB4"));
$myTracker->add_driver($pete);
$myTracker->add_driver($ronald);
$myTracker->add_driver($elmo);

echo $myTracker->getJSON().PHP_EOL;

//print_r($myTracker->get_drivers());

//print_r($myTracker);
 ?>
