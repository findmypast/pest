<?php

class PersistentPest extends Pest
{

	public $retries = 3;

	public function get($url, $data = array(), $headers = array())
	{
		$success = false;
		for ($i = 0 ; $i < $this->retries && !$success; $i++) {
			try {
				$result = parent::get($url, $data, $headers);
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

	public function put($url, $data, $headers = array())
	{
		$success = false;
		for ($i = 0 ; $i < $this->retries && !$success; $i++) {
			try {
				$result = parent::put($url, $data, $headers);
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

	public function post($url, $data, $headers = array())
	{
		$success = false;
		for ($i = 0 ; $i < $this->retries && !$success; $i++) {
			try {
				$result = parent::post($url, $data, $headers);
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

