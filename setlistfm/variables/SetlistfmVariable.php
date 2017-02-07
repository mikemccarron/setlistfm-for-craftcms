<?php

namespace Craft;

class SetlistfmVariable{
	public function __call($name, $arguments)
	{
		$className = 'Craft\Setlistfm_' . ucfirst($name) . 'Variable';
		return (class_exists($className)) ? new $className() : 'null';
	}
}