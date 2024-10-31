===PulseCheck Feed===
Contributors: RossKohler,PulseCheck
Tags: Camera,Feed,Realtime,Events,Webcam,shortcode,images,widget,embed,social
Requires at least: 2.5
Tested up to: 4.3.1
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin allows you to add your own PulseCheck feed to your WordPress site.

== Description ==

PulseCheck is a service that provides semi-live image feeds to show you what's happening at your favourite places or, if you’re a business owner, to show the world what’s happening at your place.This plugin will allow you to quickly and easily add a PulseCheck camera feed of your own restaurant/location to your WordPress site without having to delve into the page's source code. To find out how you can get a feed installed at your own location please take a look at www.pulsecheck.co.za for more details.

This plugin makes use of WordPress Shortcodes. Please follow the instructions in the ‘Installation’ tab to add a feed to your page.

== Installation ==

1. Copy the directory 'pulsecheck-feed' to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Navigate to 'PulseCheck Settings' tab in the menu and enter your API key in the field provided (Note: This key is emailed to you by the PulseCheck team).
4. If the API is correct you will now be able to add a feed to your page by using the shortcodes explained below.

**PulseCheck Shortcodes**

How to use PulseCheck shortcodes:

The plugin shortcode is of the form:-
				[pulsecheck_feed $width|$quality|$number_images|$feed_id]

$width (Optional) - Sets the width of the feed iframe. Default is width=“100%” i.e fit width to container.

$quality - Sets the feed quality. 

quality=‘icon’ will return a feed containing images of size 266x149.
quality=’full’ will return a feed containing images of size 1330x748.
Default value is quality=‘full’.

$number_images (Optional) - Sets the number of images in the carousel. Default is number_images=1

$feed_id - Please set this value to the ID of the feed you wish to display. This ID would have been given to you by the PulseCheck team in order for you to make use of our API.

**HOW TO USE**

When editing a WordPress page take note of the shortcode definition and variables.

Example:- When a user wishes to add their PulseCheck feed to their website, they may type the following when editing their page:-

			[pulsecheck_feed quality=‘full’ number_images=5 feed_id=45]

This code will be run and replaced with a PulseCheck feed carousel that consists of 5 full sized images from their feed with ID 45.


== Frequently Asked Questions ==

=Why does my feed show ‘incorrect API key.’?=

There are two reasons you may get this response from our server.
1. The API Key you have entered is not valid. Please go back to the settings page and ensure the key is correct.
2. The feed ID you have entered is not accessible from your API key. Please ensure that the feed ID you have entered corresponds to your own feed.

=How can I get my own PulseCheck feed?=

Visit our site www.pulsecheck.co.za and follow the steps to sign up for your own feed. 

== Screenshots ==

1. Example of how the PulseCheck Feed looks when generated from the shortcode. 
2. Example of using the [pulsecheck_feed] shortcode.