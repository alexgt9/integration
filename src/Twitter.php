<?php

namespace alexgt9;

class Twitter{
	public function getUser($username){
		$client = new \GuzzleHttp\Client();
		$res = $client->get("https://google.com");
		return $res->getStatusCode();
	}
}
