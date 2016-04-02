<?php
class AccessLogMongoTest extends PHPUnit_Framework_TestCase {
  // public function testFailed() {
  //   $this->assertTrue(false);
  // }
  public function setUp() {
      $this->accessLogMongo = new AccessLogMongo();
  }


  public function testMongoMustConnected() {
    $this->assertTrue($this->accessLogMongo->isConnected());
  }

  public function testSaveInfotoMongoShouleReturnTrue() {
    $accessLogMongo = new AccessLogMongo();
    $ip = '111.111.111.11';
    $dateTime = date("Y-m-d H:i:s");
    $UserAgent = "Chrome";
    $URL = "www.xxxx.com";
    $this->assertTrue($this->accessLogMongo->info($ip, $dateTime, $URL, $UserAgent));
  }


}

 ?>
