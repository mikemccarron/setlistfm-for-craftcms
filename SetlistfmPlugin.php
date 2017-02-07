<?php
/**
 * Setlist.fm API Integration plugin for Craft CMS
 *
 * A plugin for integrating Setlist.fm data.
 *
 *
 * @author    Mike McCarron
 * @copyright Copyright (c) 2017 Mike McCarron
 * @link      http://mikemccarron.com
 * @package   setlistfm-for-craftcms
 * @since     1.0.0
 */

namespace Craft;

class SetlistfmPlugin extends BasePlugin
{

	public function init()
	{
		parent::init();
	}

	function getName(){
		return Craft::t('Setlist.fm API Integration');
	}

	public function getDescription()
	{
		return Craft::t('A plugin for integrating Setlist.fm data.');
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/mikemccarron/setlistfm-for-craftcms/blob/master/README.md';
	}

	public function getReleaseFeedUrl()
	{
		return 'https://raw.githubusercontent.com/mikemccarron/setlistfm-for-craftcms/master/releases.json';
	}

	function getVersion(){
		return '0.1.0';
	}

	/**
     * As of Craft 2.5, Craft no longer takes the whole site down every time a plugin’s version number changes, in
     * case there are any new migrations that need to be run. Instead plugins must explicitly tell Craft that they
     * have new migrations by returning a new (higher) schema version number with a getSchemaVersion() method on
     * their primary plugin class:
     *
     * @return string
     */
	public function getSchemaVersion()
	{
		return '1.0.0';
	}

	function getDeveloper(){
		return 'Mike McCarron';
	}

	function getDeveloperUrl(){
		return 'http://mikemccarron.com';
	}

	public function hasCpSection()
	{
		return true;
	}

	public function getSettingsHtml(){
		return craft()->templates->render('setlistfm/settings', array(
			'settings' => $this->getSettings()
		));
	}

	protected function defineSettings(){
		return array(
			'apiKey' => array(AttributeType::String, 'default'),
			'mbid' => array(AttributeType::String, 'default'),
		);
	}

	/**
	* If you need to do any processing on your settings’ post data before they’re saved to the database, you can
	* do it with the prepSettings() method:
	*
	* @param mixed $settings  The Widget's settings
	*
	* @return mixed
	*/
	public function prepSettings($settings)
	{
		// Modify $settings here...
		return $settings;
	}

	/**
	* Called right before your plugin’s row gets stored in the plugins database table, and tables have been created
	* for it based on its records.
	*/
	public function onBeforeInstall()
	{
	}

	/**
	* Called right after your plugin’s row has been stored in the plugins database table, and tables have been
	* created for it based on its records.
	*/
	public function onAfterInstall()
	{
	}

	/**
	* Called right before your plugin’s record-based tables have been deleted, and its row in the plugins table
	* has been deleted.
	*/
	public function onBeforeUninstall()
	{
	}

	/**
	* Called right after your plugin’s record-based tables have been deleted, and its row in the plugins table
	* has been deleted.
	*/
	public function onAfterUninstall()
	{
	}


}