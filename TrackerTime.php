<?php
class TrackerTime{
  private $car = "";
  private $raw = 0;
  private $splits = array();

  function get_car(){
    return $this->car;
  }
  function set_car($newCar){
    $this->car = $newCar;
  }

  public function get_raw(){
    return $this->raw;
  }
  public function set_raw($newRaw){
    $this->raw = $newRaw;
  }

  public function get_splits(){
    return $this->splits;
  }
  public function set_splits(array $newSplits){
    $this->splits = $newSplits;
  }

  public function toArray(){
    return array("car" => $this->car, "raw" => $this->raw, "splits" => $this->splits);
  }
}

?>
