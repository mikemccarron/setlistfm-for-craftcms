<?php

namespace Craft;

class Setlistfm_SetlistService extends Setlistfm_CoreService
{
	protected $path = 'setlist/';
	protected $ext = '.json';

	public function getSetlist($options = array()){
		$json = $this->_get( $this->path . $options['id'] . $this->ext, $options);
		return $json;
	}
}