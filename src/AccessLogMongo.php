<?php
class AccessLogMongo {

  var $mongo;
  public function __construct() {
    $this->mongo = new MongoClient("127.0.0.1");
    $this->db = $this->mongo->selectDB("Captcha");
    $this->collection = $this->db->AccessLog;
  }

  public function isConnected() {
    return $this->mongo->connected;
  }

  public function info($ip, $dateTime, $URL, $UserAgent) {
    $data = array();
    $data["ip"] = $ip;
    $data["dateTime"] = new MongoDate(strtotime($dateTime));
    $data["URL"] = $URL;
    $data["UserAgent"] = $UserAgent;
    $result =  $this->collection->insert($data);

    if ($result['ok'] == '1.0') {
      return true;
    } else {
      return false;
    }

  }

}
 ?>
