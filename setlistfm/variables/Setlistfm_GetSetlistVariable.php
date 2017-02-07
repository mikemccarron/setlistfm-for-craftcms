<?php

namespace Craft;

class Setlistfm_GetSetlistVariable{
	protected $_serviceName = 'setlistfm_setlist';

	public function info($options = array())
	{
		return craft()->{$this->_serviceName}->getInfo($options);
	}

	public function setlist($options = array())
	{
		return craft()->{$this->_serviceName}->getSetlist($options);
	}
}