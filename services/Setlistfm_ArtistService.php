<?php

namespace Craft;

class Setlistfm_ArtistService extends Setlistfm_CoreService
{
	protected $jsonPath = 'artist/';
	protected $feedExt = '.json';

	public function getArtistInfo($options = array()){
		$json = $this->_get( $this->jsonPath . $options['mbid'] . $this->feedExt, $options);
		return $json;
	}
}