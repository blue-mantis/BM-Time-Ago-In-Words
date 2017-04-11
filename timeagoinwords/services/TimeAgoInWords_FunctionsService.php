<?php
namespace Craft;

/**
 * Time Ago In Words service
 */
class TimeAgoInWords_FunctionsService extends BaseApplicationComponent
{

	/**
	 * Get message from id
	 *
	 * @param int $id
	 * @return object $message
	 */
	public function timeAgoInWords($datetime) {

		$settings = craft()->plugins->getPlugin('timeagoinwords')->getSettings();

		// set timezone (default to 'Europe/London')
		$timezone = $settings->timezone ? $settings->timezone : 'Europe/London';
		date_default_timezone_set($timezone);

		// convert string to dateTime if not already
		if (!($datetime instanceof DateTime)) {
			$datetime = new DateTime($datetime);
		}

		// get past timestamp
		$past = $datetime->format('U');

		// get current timestamp
		$now = strtotime("now");

		// calculate time difference
		$distanceInSeconds = $now - $past;
		$distanceInMinutes = round($distanceInSeconds / 60);

		if ( $distanceInMinutes <= 1 ) {

			if ( $distanceInSeconds < 5 ) {
				return Craft::t('less than 5 seconds');
			}
			if ( $distanceInSeconds < 10 ) {
				return Craft::t('less than 10 seconds');
			}
			if ( $distanceInSeconds < 20 ) {
				return Craft::t('less than 20 seconds');
			}
			if ( $distanceInSeconds < 40 ) {
				return Craft::t('about half a minute');
			}
			if ( $distanceInSeconds < 60 ) {
				return Craft::t('less than a minute');
			}

			return Craft::t('1 minute');

		}
		if ( $distanceInMinutes < 45 ) {
			return Craft::t('{amount} minutes', array('amount' => $distanceInMinutes));
		}
		if ( $distanceInMinutes < 90 ) {
			return Craft::t('about 1 hour');
		}
		if ( $distanceInMinutes < 1440 ) {
			return Craft::t('about {amount} hours', array('amount' => round(floatval($distanceInMinutes) / 60.0)));
		}
		if ( $distanceInMinutes < 2880 ) {
			return Craft::t('1 day');
		}
		if ( $distanceInMinutes < 43200 ) {
			return Craft::t('about {amount} days', array('amount' => round(floatval($distanceInMinutes) / 1440)));
		}
		if ( $distanceInMinutes < 86400 ) {
			return Craft::t('about 1 month');
		}
		if ( $distanceInMinutes < 525600 ) {
			return Craft::t('{amount} months', array('amount' => round(floatval($distanceInMinutes) / 43200)));
		}
		if ( $distanceInMinutes < 1051199 ) {
			return Craft::t('about 1 year');
		}

		return Craft::t('over {amount} years', array('amount' => round(floatval($distanceInMinutes) / 525600)));
	}

}
