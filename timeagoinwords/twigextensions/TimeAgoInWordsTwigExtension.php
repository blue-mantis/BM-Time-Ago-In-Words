<?php
namespace Craft;

use Twig_Extension;
use Twig_Filter_Method;

class TimeAgoInWordsTwigExtension extends \Twig_Extension
{

	public function getFilters() {
		return array(
			'timeAgoInWords' => new Twig_Filter_Method($this,'timeAgoInWords'),
		);
	}

	public function getName()
	{
		return Craft::t('BM Time Ago In Words');
	}

	/**
	 * Get time ago in words from datetime
	 *
	 * @param object $datetime
	 * @return string $timeAgoInWords
	 */
	public function timeAgoInWords($datetime) {
		$timeAgoInWords = craft()->timeAgoInWords_functions->timeAgoInWords($datetime);
		return $timeAgoInWords;
	}

}
