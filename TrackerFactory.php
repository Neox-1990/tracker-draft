<?php
class TrackerFactory{
  public static function initTracker($title,$eventstart,$track,array $cars){
    //maybe additional plausibility tests for parameters here
    //
    //
    $result = new Tracker();
    $result->set_id(0); //TODO: give unique Tracker ID
    $result->set_title($title);
    $result->set_eventstart($eventstart);
    $result->set_track($track);
    $result->set_cars($cars);
    return $result;
  }

  public static function fromJSON($json){
    //TODO: make Tracker from JSON String
  }
}
 ?>
