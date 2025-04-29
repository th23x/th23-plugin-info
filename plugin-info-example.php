<?php

// safety
die();

// === Config: plugin information (main plugin file header) ===

// recommendation: define as many info as possible in the header of you main plugin file, where it is required as per the WP coding standards anyhow - such header might then look like the following for the main file (th23-specials.php) of my th23 Specials plugin

/*
Plugin Name: th23 Specials
Description: Essentials to customize Wordpress via simple settings, SMTP, title highlight, category selection, more separator, sticky posts, remove clutter, ...

Version: 6.0.1

Requires at least: 4.2
Tested up to: 6.8
Requires PHP: 8.0

Author: Thorsten (th23)
Author URI: https://thorstenhartmann.de
Author IMG: https://thorstenhartmann.de/avatar.png

License: GPL-3.0
License URI: https://github.com/th23x/th23-specials/blob/main/LICENSE

Plugin URI: https://github.com/th23x/th23-specials

Text Domain: th23-specials
Domain Path: /lang
*/

// === Config: plugin information (plugin-info.php) ===

// note: key plugin information are collected from main file plugin header (see above) and thus, these fields linke "name" are empty below - however if not empty, the below specified data "overrule" any other settings

$plugin = array();

// assets_base [recommended]
// note: (external) assets base for banners, icons and screenshots on Github (readme.md) and own updater (update.json)
$plugin['assets_base'] = 'https://raw.githubusercontent.com/th23x/th23-specials/refs/heads/main/';

// slug [mandatory]
$plugin['slug'] = 'th23-specials';

// name [mandatory]
// note: recommended as header "Plugin Name: th23 Specials"
$plugin['name'] = '';

// icons [optional]
// note: relative url, recommended to be combined with "assets_base"
$plugin['icons'] = array(
	'square' => 'assets/icon-square.png',
	'horizontal' => 'assets/icon-horizontal.png'
);

// tags [optional]
$plugin['tags'] = array('essentials', 'filter', 'smtp', 'header');

// contributors [mandatory]
// note: one (main) as author is required, at least USER ("th23" in example) is required and has to be a valid username on https://profiles.wordpress.org/username which is auto-linked to the WP profile - further contributors can be added via the plugin info file
// note: recommended as header "Author: Thorsten (th23) ..."
$plugin['contributors'] = array(
	'USER' => array(
		'name' => 'NAME',
		'url' => 'URL',
		'avatar' => 'AVATAR',
		'author' => true/false
	),
	...
);

// homepage [recommended]
// note: recommended as header "Plugin URI: https://github.com/th23x/th23-specials"
$plugin['homepage'] = '';

// donate_link [optional]
// note: if empty, homepage will be used instead for own updater (update.json) and WP.org (readme.txt)
$plugin['donate_link'] = '';

// support_url [optional]
// note: if empty, homepage will be used instead for own updater (update.json)
$plugin['support_url'] = '';

// license_short [mandatory]
// note: recommended as header "License: GPL-3.0"
$plugin['license_short'] = '';

// license_uri [mandatory]
// note: recommended as header "License URI: https://github.com/th23x/th23-specials/blob/main/LICENSE"
$plugin['license_uri'] = '';

// license_description [optional]
// note: if specified, used for Github (README.md) instead of short license
$plugin['license_description'] = 'You are free to use this code in your projects as per the `GNU General Public License v3.0`. References to this repository are of course very welcome in return for my work 😉';

// version [mandatory]
// note: recommended as header "Version: 6.0.1"
$plugin['version'] = '';

// last_updated [optional]
// note: if left empty (recommended), will be filled with current date/time automatically - otherwise expects timestamp in the format "2025-04-25 20:21:15"
$plugin['last_updated'] = '';

// download_link [optional]
// note: mandatory for plugins not hosted on WP.org via own updater (update.json) - note: using {VERSION} in the link will be replaced with latest version upon plugin info creation
$plugin['download_link'] = 'https://github.com/th23x/th23-specials/releases/latest/download/th23-specials-v{VERSION}.zip';

// requires [mandatory]
// note: min WP version
// note: recommended as header "Requires at least: 4.2"
$plugin['requires'] = '';

// tested [mandatory]
// note: max tested WP version
// note: recommended as header "Tested up to: 6.8"
$plugin['tested'] = '';

// requires_php [mandatory]
// note: recommended as header "Requires PHP: 8.0"
$plugin['requires_php'] = '';

// banners [recommended]
// note: sizes are "low" 772px x 250px and "high" 1544 px x 500px - relative url, recommended to be combined with "assets_base"
$plugin['banners'] = array(
	'low' => 'assets/banner-772x250.jpg',
	'high' => 'assets/banner-1544x500.jpg'
);

// summary [mandatory]
// note: max 150 characters (WP.org restriction)
// note: recommended as header "Description: Essentials to customize Wordpress via simple settings, SMTP, title highlight, category selection, more separator, sticky posts, remove clutter, ..."
$plugin['summary'] = '';

// intro [recommended]
// note: key information about the plugin, option to use markdown for structuring, highlighting, links, etc
$plugin['intro'] = 'Customize your Wordpress website even more to your needs via **simple admin settings** instead of code modifications... [from here on only excerpt of original]

**New paragraphs** are simply added with inserting double new lines into the source code. Using them make sure that the new line does NOT start indeted as some editors do, otherwise the result will also show these (unwanted) indents.

Also lists can easily be created:

* Mail sending via **SMTP server** instead of default PHP mail function - and with custom subject prefix
* **Revision and edit restrictions** for posts and pages
* **Highlighting in titles** of posts and pages - for custom styling via theme
* ...

Even code style is in between `matching apostrophy`, which will work independet of the code language, eg also for CSS selectors like `.entry-title span`.

A favourite [search engine](https://duckduckgo.com) can serve as a link example.';

// screenshots [optional]
// note: relative urls, recommended to be combined with "assets_base"
$plugin['screenshots'] = array(
	1 => array('src' => 'assets/screenshot-1.jpg', 'caption' => 'Settings section in the admin dashboard with easy to reach options'),
	2 => array('src' => 'assets/screenshot-2.jpg', 'caption' => 'Category selection (when limited to one per post) via radion buttons in the quick edit view'),
	3 => array('src' => 'assets/screenshot-3.jpg', 'caption' => 'Enforced "read more" block in the Gutenberg / block editor')
);

// usage [optional]
$plugin['usage'] = 'Simply install plugin and choose customizations required from the plugin settings page. Few options involve further actions to achieve required result - **see below and FAQ section** for more details.

For **highlighting in post / page titles**, put part to highlight in between `*matching stars*` in the editor. This part will be enclosed by `<span></span>` tags in the HTML on the frontend, allowing styling by theme via the CSS selector `.entry-title span`.

> [!NOTE]
> Some options change important core functionality of Wordpress - make sure you **properly test your website** before usage in production environment!';

// setup [optional]
$plugin['setup'] = 'For a manual installation upload extracted `th23-specials` folder to your `wp-content/plugins` directory.

The plugin is **configured via its settings page in the admin area**. Find all options under `Settings` -> `th23 Specials`. The options come with a description of the setting and its behavior directly next to the respective settings field.';

// faq [mandatory]
$plugin['faq'] = array(
	'non_compliance' => array(
		'q' => 'Is there a way to identify **existing posts / pages that do not comply** with the one category only requirement or that are missing the "read more" block / tag?',
		'a' => 'Yes, there are links in the descriptions on the th23 Specials settings page, **next to the respective option** to search for "non-compliant" posts / pages.

Upon a click on this link you will see all currently non-compliant posts / pages. You can modify these by clicking on their titles, which loads them into your default editor.',
	),
	'no_effect' => array(
		'q' => 'Some **settings seem to have no effect** - eg oEmbed features are still active depsite deactivated?',
		'a' => 'This might be happening as **some options can be "overruled"** by settings by your theme. For settings that might be affected, please see the description on the settings page.

To change such settings, please **check your active theme** and adjust them there, if required.',
	),
);

// changelog [mandatory]
// note: sorted by version, content can be a string or an array for a list, at least info for current version must be present
$plugin['changelog'] = array(
	'v6.0.1' => array(
		'fix: update th23 Admin class to v1.6.1',
		'fix: typos and wording adjustments',
	),
	'v6.0.0' => array(
		'n/a: first public release',
	),
);

// upgrade_notice [mandatory]
// note: sorted by version, content can be a string or an array for a list, at least info for current version must be present
$plugin['upgrade_notice'] = array(
	'v6.0.1' => 'n/a',
);


// === Do NOT edit below this line for config ===

// safety
define('ABSPATH', 'defined');

// load class, generate plugin info
require_once(__DIR__ . '/inc/th23-plugin-info-class.php');
$th23_plugin_info = new th23_plugin_info();
$th23_plugin_info->generate($plugin);

?>
