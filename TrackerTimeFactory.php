<?php
class TrackerTimeFactory{

  public static function onlyRawTime($rawTime){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new TrackerTime();
    $result->set_raw($rawTime);
    return $result;
  }

  public static function onlyTimes($rawTime, array $splits){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new TrackerTime();
    $result->set_raw($rawTime);
    $result->set_splits($splits);
    return $result;
  }

  public static function onlyCar($car){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new TrackerTime();
    $result->set_car($car);
    return $result;
  }

  public static function completeTime($car,$rawTime,array $splits){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new TrackerTime();
    $result->set_car($car);
    $result->set_raw($rawTime);
    $result->set_splits($splits);
    return $result;
  }
}
 ?>
