<?php  
require_once('Log.php');  
class LogTest extends PHPUnit_TestCase  
{
	var $log;
	public function setUp(){
		$this->log = new Log('/tmp/unittest.log');
	}  
	public function tearDown(){
		unlink($this->log->filename);
		unset($this->log);
	}
	public function testLogFileExists(){
		$this->assertTrue(file_exists($this->log->filename));
	}
	public function testDontPurgeLogFile(){
		$this->log->write("Hello world!");
		$filename = $this->log->filename;
		unset($this->log);
		$this->log = new Log($filename);
		$this->assertTrue(filesize($filename) > 0);
	}
}
