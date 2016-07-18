<?php
class TrackerDriverFactory{
  public static function onlyNames($lfsw,$name){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new TrackerDriver();
    $result->set_lfsw($lfsw);
    $result->set_name($name);
    return $result;
  }

  public static function completeDriver($lfsw,$name,array $times){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new TrackerDriver();
    $result->set_lfsw($lfsw);
    $result->set_name($name);
    $result->set_times($times);
    return $result;
  }
}
 ?>
