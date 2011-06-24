<?php

Class Log {
	var $filename;
	var $file;

	public function __construct($filename) {
		$this->filename = $filename;
		$this->file = fopen($filename, 'a');
	}

	public function write($line) {
		fwrite($this->file, $line.PHP_EOL);
	}

	public function __destruct() {
		fclose($this->file);
	}

}
