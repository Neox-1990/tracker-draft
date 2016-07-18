<?php
class TrackerDriver{
  private $lfsw = "";
  private $name = "";
  private $times = array();

  public function get_lfsw(){
    return $this->lfsw;
  }
  public function set_lfsw($newLfsw){
    $this->lfsw = $newLfsw;
  }

  public function get_name(){
    return $this->name;
  }
  public function set_name($newName){
    $this->name = $newName;
  }

  public function get_times(){
    return $this->times;
  }
  public function set_times(array $newTimes){
    $this->times = $newTimes;
  }

  public function toArray(){
    $timesArray = array();
    foreach ($this->times as $time) {
      array_push($timesArray,$time->toArray());
    }
    return array("lfsw" => $this->lfsw, "name" => $this->name, "times" => $timesArray);
  }
}
 ?>
