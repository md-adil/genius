<?php
/**
* 
*/
class Session
{
	
	function __construct() {
		# code...
	}

	public function get($key) {
		if(isset($_SESSION[$key]) {
			return $_SESSION[$key];
		}
		return false;
	}

	public function set($key, $val) {

	}

	public function flash() {

	}
	public function reflash() {
		
	}
	public function all() {

	}
	public function has() {

	}
	public function put() {

	}
	public function push() {

	}
	public function pull() {

	}
	public function forget() {

	}
	public function flush() {

	}
	public function regenerate() {
		// If you need to regenerate the session ID, you may use the regenerate method:
	}
}