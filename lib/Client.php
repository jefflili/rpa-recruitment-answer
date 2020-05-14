<?php 
namespace MyGreeter;

class Client {
  public $curTime;
  public function __construct($time) {
    $this->curTime = $time;
  }

  public function getGreeting() {
    $time = $this->curTime;
    $startTime = date('Ymd').'00';
    $midTime = date('Ymd').'12';
    $sixTime = date('Ymd').'18';
    $res = '';
    if($time >= $startTime && $time < $midTime) {
      $res = "Good moring";
    }elseif($time >= $midTime && $time < $sixTime) {
      $res = "Good afternoon";
    }else {
      $res = "Good evening";
    }
    return $res;
  }
}


