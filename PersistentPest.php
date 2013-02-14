<?php

require_once( 'Pest.php' );

class PersistentPest extends Pest
{

	public function get($url) {
		$success = false;
		for ($i = 0 ; $i < 3 && !$success; $i++) {
			try {
				$result = parent::get($url);
				$success = true;
			}
			catch(Exception $e) {
				$success = false;
			}
		}
		if (!$success) {
			throw $e;
		}
		return $result;
	}

	public function put($url, $data, $headers = array()) {
		$success = false;
		for ($i = 0 ; $i < 3 && !$success; $i++) {
			try {
				$result = parent::put($url, $data);
				$success = true;
			}
			catch(Exception $e) {
				$success = false;
			}
		}
		if (!$success) {
			throw $e;
		}
		return $result;
	}

	public function post($url, $data, $headers = array()) {
		$success = false;
		for ($i = 0 ; $i < 3 && !$success; $i++) {
			try {
				$result = parent::post($url, $data);
				$success = true;
			}
			catch(Exception $e) {
				$success = false;
			}
		}
		if (!$success) {
			throw $e;
		}
		return $result;
	}

}

