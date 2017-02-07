<?php

namespace Craft;

class SetlistfmPlugin extends BasePlugin
{
	function getName(){
		return Craft::t('Setlist.fm API Integration');
	}

	function getVersion(){
		return '0.0.1';
	}

	function getDeveloper(){
		return 'Mike McCarron';
	}

	function getDeveloperUrl(){
		return 'http://mikemccarron.com';
	}

	protected function defineSettings(){
		return array(
			'apiKey' => array(AttributeType::String, 'default'),
			'mbid' => array(AttributeType::String, 'default'),
		);
	}

	public function getSettingsHtml(){

		return craft()->templates->render('setlistfm/settings', array(
			'settings' => $this->getSettings()
		));
	}
	public function hasCpSection()
    {
        return true;
    }
}