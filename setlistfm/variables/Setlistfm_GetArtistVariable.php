<?php

namespace Craft;

class Setlistfm_GetArtistVariable{
	protected $_serviceName = 'setlistfm_artist';

	public function info($options = array())
	{
		return craft()->{$this->_serviceName}->getArtistInfo($options);
	}
}