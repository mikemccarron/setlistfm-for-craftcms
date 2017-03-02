<?php

namespace Craft;

class Setlistfm_TourdateService extends Setlistfm_CoreService
{
	protected $path = 'artist/';
	protected $ext = '/setlists.json';

	public function getTourDateInfo($options = array()){
		$json = $this->_get( $this->path . $options['mbid'] . $this->ext, $options);
		return $json['setlists'];
	}

	public function getTourDates($options = array()){
		$json = $this->_get( $this->path . $options['mbid'] . $this->ext, $options);
		return $json['setlists']['setlist'];
	}
}