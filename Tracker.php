<?php
class Tracker{
  private $id = null;
  private $title = "";
  private $track = "";
  private $cars = array();
  private $eventstart = "";
  private $drivers = array();

  public function get_id(){
    return $this->id;
  }
  public function set_id($newId){
    $this->id = $newId;
  }

  public function get_title(){
    return $this->title;
  }
  public function set_title($newTitle){
    $this->title = $newTitle;
  }

  public function get_track(){
    return $this->track;
  }
  public function set_track($newTrack){
    $this->track = $newTrack;
  }

  public function get_cars(){
    return $this->cars;
  }
  public function set_cars(array $newCars){
    $this->cars = $newCars;
  }

  public function get_eventstart(){
    return $this->eventstart;
  }
  public function set_eventstart($newEventstart){
    $this->eventstart = $newEventstart;
  }

  public function get_drivers(){
    return $this->drivers;
  }
  public function set_drivers(array $newDrivers){
    $this->drivers = $newDrivers;
  }
  public function add_driver(TrackerDriver $driver){
    array_push($this->drivers,$driver);
  }

  public function getJSON(){
    $driverArray = array();
    foreach ($this->drivers as $driver) {
      array_push($driverArray,$driver->toArray());
    }

    print_r($driverArray);
    
    $json = array(
      "id" => $this->id,
      "title" => $this->title,
      "track" => $this->track,
      "cars" => $this->cars,
      "eventstart" => $this->eventstart,
      "drivers" => $driverArray);
    return json_encode($json);
  }
}
 ?>
