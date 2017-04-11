<?php
namespace Craft;

class TimeAgoInWordsPlugin extends BasePlugin
{

	function getName()
	{
		return Craft::t('BM Time Ago In Words');
	}

	function getVersion()
	{
		return '1.1.3';
	}

	function getDeveloper()
	{
		return 'Blue Mantis';
	}

	function getDeveloperUrl()
	{
		return 'http://bluemantis.com';
	}

	/**
	 * @return string
	 */
	public function getDocumentationUrl()
	{
		return 'https://github.com/blue-mantis/BM-Time-Ago-In-Words';
	}


	protected function defineSettings()
	{
		return array(
			'timezone' => array(AttributeType::String, 'required' => true, 'default' => ini_get('date.timezone')),
		);
	}

	public function getSettingsHtml()
	{
		return craft()->templates->render('timeagoinwords/_settings', array(
			'settings' => $this->getSettings()
		));
	}

	/**
	 * Registers the Twig extension.
	 *
	 * @return FacebookFeedTwigExtension
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.timeagoinwords.twigextensions.TimeAgoInWordsTwigExtension');
		return new TimeAgoInWordsTwigExtension();
	}

}
