# BM Time Ago In Words
Craft CMS Plugin to provide human readable "fuzzy" datetime/timestamps.

Eg: "1 minute ago", "30 minutes ago", "1 week ago", "5 months ago"

![screenshot](http://i.imgur.com/sFJCVuG.png)

# User Guide

##1. Configure Timezone

Navigate to your sites plugin listing in the craft admin panel, eg: `http://www.example.com/admin/settings/plugins`

![screenshot](http://i.imgur.com/w68JvXz.png)

Click the plugin name "Time Ago In Words" to access the plugins control panel. Then enter the desired timezone.

![screenshot](http://i.imgur.com/ekKmFc7.png)

##2. Output a datetime/timestamp as words

Simply pass the datetime or timestamp to the custom twig method `timeAgoInWords`, like so:

`{{ tweet.created_at|timeAgoInWords }}`


# More plugins by Blue Mantis

... can be found [here](http://plugins.bluemantis.com/)


# License

The MIT License (MIT)

Copyright (c) <2015> <bluemantis.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
