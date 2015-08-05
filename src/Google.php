<?php

namespace alexgt9;

class Google
{
	public function getStatus($username)
	{
		$client = new \GuzzleHttp\Client();
		$res = $client->get("https://google.com");
		return $res->getStatusCode();
	}
}
