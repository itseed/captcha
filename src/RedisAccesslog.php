<?php
class RedisAccesslog {
  public function __construct($predis) {
    $this->predis = $predis;
  }
  public function connect() {
    try {
      $this->predis->ping();
    } catch (Exception $e) {
        return false;
    }
    return true;
  }

  public function info($msg) {
    $key = "log";
    try {
      $this->predis->set($key, $msg);
    } catch (Exception $e) {
        return false;
    }
    return true;
  }
}
 ?>
