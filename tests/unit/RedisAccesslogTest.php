<?php
class RedisAccesslogTest extends PHPUnit_Framework_TestCase {
  public function setUp() {
    $this->predis = $this->getMock('Predis', array('ping', 'set'));
  }

  public function testConnectToExistingRedisShouldReturnTrue() {
    $this->predis->expects($this->once())->method('ping')->will($this->returnValue("something"));

    $redisAccesslog = new RedisAccesslog($this->predis);
    $this->assertTrue($redisAccesslog->connect());
  }

  public function testConnectToNotExistingRedisShouldReturnFalse() {
    $this->predis->expects($this->once())->method('ping')->will($this->throwException(new Exception));

    $redisAccesslog = new RedisAccesslog($this->predis);
    $this->assertFalse($redisAccesslog->connect());
  }

  public function testWriteLogWithValidCmdShouldReturnTrue() {
    $this->predis->expects($this->once())->method('set')->will($this->returnValue("something"));

    $redisAccesslog = new RedisAccesslog($this->predis);
    $this->assertTrue($redisAccesslog->info("this is a log"));
  }

  public function testWriteLogWithInvalidCmdShouldReturnFalse() {
    $this->predis->expects($this->once())->method('set')->will($this->throwException(new Exception));

    $redisAccesslog = new RedisAccesslog($this->predis);
    $this->assertFalse($redisAccesslog->info("this is a log"));
  }

}
?>
