# BM Time Ago In Words
Craft CMS Plugin to provide human readable "fuzzy" datetime/timestamps.

Eg: "1 minute ago", "30 minutes ago", "1 week ago", "5 months ago"

![screenshot](http://i.imgur.com/sFJCVuG.png)

## User Guide

1. Configure Timezone
2. 
Navigate to your sites plugin listing in the craft admin panel, eg: `http://www.example.com/admin/settings/plugins`

![screenshot](http://i.imgur.com/w68JvXz.png)

Click the plugin name "Time Ago In Words" to access the plugins control panel. Then enter the desired timezone.

![screenshot](http://i.imgur.com/ekKmFc7.png)

2. Output a datetime/timestamp as words

Simply pass the datetime or timestamp to the custom twig method `timeAgoInWords`, like so:

`{{ tweet.created_at|timeAgoInWords }}`
