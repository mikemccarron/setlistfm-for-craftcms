<?php

namespace Craft;

class Setlistfm_GetTourDatesVariable{
	protected $_serviceName = 'setlistfm_tourdate';

	public function info($options = array())
	{
		return craft()->{$this->_serviceName}->getTourDateInfo($options);
	}

	public function tourDates($options = array())
	{
		return craft()->{$this->_serviceName}->getTourDates($options);
	}
}