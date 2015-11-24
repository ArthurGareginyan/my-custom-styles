=== My Custom Styles ===
Contributors: Arthur Gareginyan
Tags: custom, CSS, CSS2, CSS3, editor, simple, style, styles, styling, stylesheet, style sheet, plugin,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HQYRXGUG5RNUA
Requires at least: 3.9
Tested up to: 4.3
Stable tag: 1.4
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

EASILY and SAFELY add your custom styles (CSS) to WordPress website's header.

== Description ==
An easy to use WordPress plugin that gives you the ability to EASILY and SAFELY add your custom styles (CSS) to WordPress website's header. 

No need anymore to editing a files of your theme and/or plugins for to add custom styles (CSS). Just add your CSS code in the field on the plugin page and this plugin will do the rest for you. It's really useful in case of any theme/plugin update, because your custom styles (CSS) would never be overwritten!

On the plugin page you find the CSS editor powered by CodeMirror. It have syntax highlighting and line numbering options. Also this editor support a tab indentation.

Your custom styles will keep on working, no matter how many times you upgrade or switch your theme and plugins.


= Features =

**Current features:**

* Syntax highlighting (by CodeMirror).
* Line numbering (by CodeMirror).
* Ready for translation (.pot file included).
* CodeMirror scripts are combined and minified.

**Coming soon:**

* CSS minifier.
* Trigger to temporary disable the custom CSS code.
* Backuping the custom CSS code to a file.
* (Got more ideas? Tell me!)

For more details please visit - [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-styles.html)

**Please Vote and Enjoy**

* Your votes really make a difference! Thanks.

== Installation ==
Install "My Custom Styles" just as you would any other WordPress Plugin.

Automatically via WordPress:

1. Log into WordPress Dashboard of your website.
2. Go to "`Plugins`" —> "`add new plugins`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manual via FTP:

1. Download a copy (zip file) of this plugin from WordPress.org.
2. Unzip the zip file.
3. Upload the unzipped directory to your website's plugin directory (`/wp-content/plugins/`).
4. Log into WordPress Dashboard of your website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Custom Styles`"  menu item will appear in the "`Appearance`" section. Click on this in order to view plugin's administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Will this Plugin work on my WordPress.com website? =
Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.

= Can I use this plugin on my language? =
Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= How does it work? =
If you want to change the layout of your theme or plugin you should look for the element that you want to change. So first you should inspect your theme or plugin.

Then go to page "`Appearance`" —> "`Custom Styles`" and enter your custom style (CSS only). Example:
`#header {
    background:#000;
    color:#fff;
}

body {
    background-color: #b0c4de;
}`

= How much of CSS code (characters) I can enter in the text field? =
I don't limit the number of characters.

= Where to report bug if found? =
Please visit [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-styles.html) and report.

= Where to share any ideas or suggestions to make the plugin better? =
Please visit [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-styles.html) and share.


== Screenshots ==
1. Plugin’s page.
2. Plugin’s page with custom CSS code added.
3. Plugin’s page with success message.


== Other Notes ==
**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html)
and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Support**

* Did you enjoy this plugin? Please [donate to support ongoing development](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=HQYRXGUG5RNUA). Your contribution would be greatly appreciated.
* Do you have any ideas or suggestions to make the plugin better? I can’t wait to hear them! Please share! [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-styles.html)

**Please Vote and Enjoy**

* Your votes really make a difference! Thanks.

**Links**

* [Developer Website](http://mycyberuniverse.com)
* [Dedicated Plugin Page](http://mycyberuniverse.com/my_programs/wp-plugin-my-custom-styles.html)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-styles)


== Changelog ==
= 1.4 =
* The stylesheet of plugin's page moved to separate file.
* The javascript from settings_page.php moved to separate file.
* Changed the style of title in plugin's page.
* The LICENSE file renamed to LICENSE.txt.
* Fixed the prefix in name of function "mcstyles_add_styling".
= 1.3 =
* Fixed the issue due to which nothing appears below line 26 until you click below that line.
= 1.2 =
* Combined and minified the CodeMirror scripts.
* Deleted excess line: "delete_option( 'mcstyles_error' )".
= 1.1 =
* Added ready for translation (.pot file included).
* Added russian translation.
= 1.0 =
* Initial release.
* Added syntax highlighting by CodeMirror.
* Added line numbering by CodeMirror.
= 0.2 =
* Beta version.
= 0.1 =
* Alfa version.


== Upgrade Notice ==
= 1.4 =
* The stylesheet of plugin's page moved to separate file.
* The javascript from settings_page.php moved to separate file.
* Changed the style of title in plugin's page.
* The LICENSE file renamed to LICENSE.txt.
* Fixed the prefix in name of function "mcstyles_add_styling".
= 1.3 =
* Fixed the issue due to which nothing appears below line 26 until you click below that line.
= 1.2 =
* Combined and minified the CodeMirror scripts.
* Deleted "delete_option( 'mcstyles_error' )".
= 1.1 =
* Added ready for translation (.pot file included).
* Added russian translation.
= 1.0 =
Please update to first stable release!
= 0.2 =
Please update to beta version.
