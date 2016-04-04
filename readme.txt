=== My Custom Styles ===
Contributors: Arthur Gareginyan
Tags: custom, CSS, CSS2, CSS3, editor, simple, style, styles, styling, stylesheet, style sheet, plugin,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.4
Stable tag: 1.7
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily and safely add your custom styles (CSS) to WordPress website's header.

== Description ==
An easy to use WordPress plugin that gives you the ability to easily and safely add your custom styles (CSS) to WordPress website's header. 

No need anymore to editing a files of your theme and/or plugins for to add custom styles (CSS). Just add your CSS code in the field on the plugin page and this plugin will do the rest for you. It's really useful in case of any theme/plugin update, because your custom styles (CSS) would never be overwritten!

On the plugin page you find the CSS editor powered by CodeMirror. It have syntax highlighting and line numbering options. Also this editor support a tab indentation.

Your custom styles will keep on working, no matter how many times you upgrade or switch your theme and plugins.

= Features =

**Current features:**

* Syntax highlighting (by CodeMirror)
* Line numbering (by CodeMirror)
* Ready for translation (.pot file included)
* Russian translation
* CodeMirror scripts are combined and minified

**Coming soon:**

* CSS minifier
* Trigger to temporary disable the custom CSS code
* Backuping the custom CSS code to a file

**Got more ideas? Tell me!**

If you have any suggestions to make this plugin better, don't hesitate to contact me.

**Please Vote and Enjoy**

Your votes really make a difference! Thanks.


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
= Q. Will this Plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.

= Q. Can I use this plugin on my language? =
A. Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= Q. Does this plugin require modification to the theme? =
A. Absolutely not. This plugin is added/configured entirely from the website's Admin section.

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is that the plugin has a conflict with another plugin you're using. It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, I'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. How does it work? =
A. If you want to change the layout of your theme or plugin you should look for the element that you want to change. So first you should inspect your theme or plugin.

Then go to page "`Appearance`" —> "`Custom Styles`" and enter your custom style (CSS only). Example:
`#header {
    background:#000;
    color:#fff;
}

body {
    background-color: #b0c4de;
}`

= Q. How much of CSS code (characters) I can enter in the text field? =
A. I don't limit the number of characters.

= Q. Where to report bug if found? =
A. Please visit [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-styles) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Please send me email [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com).

= Q. I love this plugin! Can I help somehow? =
A. Yes, any financial contributions are welcome! Just visit my website and click on the donate link, and thank you! [My website](http://www.arthurgareginyan.com/donate.html)


== Screenshots ==
1. Plugin’s page.
2. Plugin’s page with custom CSS code added.


== Other Notes ==

"My Custom Styles" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html)
and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

[CodeMirror](https://codemirror.net/) is an open-source project shared under an [MIT license](https://codemirror.net/LICENSE).

**Support**

* Did you enjoy this plugin? Please [donate to support ongoing development](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS). Your contribution would be greatly appreciated.
* Do you have any ideas or suggestions to make the plugin better? I can’t wait to hear them! Please share! [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com)

**Please Vote and Enjoy**

* Your votes really make a difference! Thanks.

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-styles)


== Changelog ==
= 2.0 =
* New design of settings page (new layout).
* Constants variables added.
* editor.js deleted.
* js-functions.js (file with all js functions) created.
* Plugin URI changed to GitHub repository.
* Added my personal ad about freelance.
* .pot file updated.
* Russian translation updated.
= 1.7 =
* Donate link changed.
* Localization improved.
* .pot file updated.
= 1.6 =
* Authors URI changed.
= 1.5 =
* Removed more unused do_action() from settings_page.php file.
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
= 2.0 =
Please update to new release!
= 1.0 =
Please update to first stable release!
= 0.2 =
Please update to beta version.