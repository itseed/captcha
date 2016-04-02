<?php
class RedisAccesslogTest extends PHPUnit_Framework_TestCase {
  var $dummy_host = "0.0.0.0";
  var $dummy_not_existing_host = "0.0.0.0";
  var $dummy_port = "6380";

  private function getMockPredis() {
    $predis = $this->getMock('Predis', array('ping'));
    return $predis;
  }

  public function testConnectRedisShouldReturnTrue() {
    $predis = $this->getMockPredis();
    $predis->expects($this->once())->method('ping')->will($this->returnValue("something"));

    $redisAccesslog = new RedisAccesslog($predis);
    $this->assertTrue($redisAccesslog->connect());
  }

  public function testConnectToNotExistingRedisShouldReturnFalse() {
    $predis = $this->getMockPredis();
    $predis->expects($this->once())->method('ping')->will($this->throwException(new Exception));

    $redisAccesslog = new RedisAccesslog($predis);
    $this->assertFalse($redisAccesslog->connect());
  }

  public function testWriteLogShouldReturnTrue() {
    $redisAccesslog = new RedisAccesslog($this->dummy_host, $this->dummy_port);
    $this->assertTrue($redisAccesslog->info());
  }

}
?>
