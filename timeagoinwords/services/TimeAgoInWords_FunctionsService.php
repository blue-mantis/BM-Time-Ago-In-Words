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

		// get timestamp for datetime
		$datetime = strtotime($datetime);

		// get current timestamp
		$now = strtotime("now");

		// calcluate time difference
		$distanceInSeconds = $now - $datetime;
		$distanceInMinutes = round($distanceInSeconds / 60);

		if ( $distanceInMinutes <= 1 ) {

			if ( $distanceInSeconds < 5 ) {
				return 'less than 5 seconds';
			}
			if ( $distanceInSeconds < 10 ) {
				return 'less than 10 seconds';
			}
			if ( $distanceInSeconds < 20 ) {
				return 'less than 20 seconds';
			}
			if ( $distanceInSeconds < 40 ) {
				return 'about half a minute';
			}
			if ( $distanceInSeconds < 60 ) {
				return 'less than a minute';
			}

			return '1 minute';

		}
		if ( $distanceInMinutes < 45 ) {
			return $distanceInMinutes . ' minutes';
		}
		if ( $distanceInMinutes < 90 ) {
			return 'about 1 hour';
		}
		if ( $distanceInMinutes < 1440 ) {
			return 'about ' . round(floatval($distanceInMinutes) / 60.0) . ' hours';
		}
		if ( $distanceInMinutes < 2880 ) {
			return '1 day';
		}
		if ( $distanceInMinutes < 43200 ) {
			return 'about ' . round(floatval($distanceInMinutes) / 1440) . ' days';
		}
		if ( $distanceInMinutes < 86400 ) {
			return 'about 1 month';
		}
		if ( $distanceInMinutes < 525600 ) {
			return round(floatval($distanceInMinutes) / 43200) . ' months';
		}
		if ( $distanceInMinutes < 1051199 ) {
			return 'about 1 year';
		}

		return 'over ' . round(floatval($distanceInMinutes) / 525600) . ' years';
	}

}
