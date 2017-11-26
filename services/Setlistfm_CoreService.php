<?php

namespace Craft;

class Setlistfm_CoreService extends BaseApplicationComponent
{
	protected $apiKey;
	public $cacheDuration = 3600;

	public function init(){
		$settings = craft()->plugins->getPlugin('setlistfm')->getSettings();
		$this->apiKey = $settings->apiKey;
	}

	protected function _makeRequest($url)
	{
		try {
			$cached = craft()->cache->get($url);

			if ($cached) {
				return $cached;
			}
			else {
				$client = new \Guzzle\Http\Client();
				$request = $client->get($url);
				$response = $request->send();

				if (!$response->issuccessful()){
					return;
				}

				$output = $response->json();
				return $output;
			}
		} catch(\Exception $e) {
			throw $e;
		}
	}

	protected function _buildUrl($endpoint)
	{
		return 'http://api.setlist.fm/rest/1.0/' . $endpoint . '?';
	}

	protected function _getIdFromOptions(&$options)
	{
		return $this->pullFromArray($options, 'id');
	}

	protected function _get($endpoint, $options)
	{
		$options['apikey'] = $this->apiKey;

		$query = http_build_query($options);

		$url = $this->_buildUrl($endpoint) . $query;
		$response = $this->_makeRequest($url);

		return $response;
	}


	public function pullFromArray(&$array, $key, $default = null)
	{
		if (array_key_exists($key, $array)) {
			$val = $array[$key];
			unset($array[$key]);
			return $val;
		} else {
			return $default;
		}
	}
}