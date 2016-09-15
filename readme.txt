=== My Custom Styles ===
Contributors: Arthur Gareginyan
Tags: code, snippet, custom, css, css2, css3, edit, editing, editor, simple, style, styles, styling, stylesheet, style sheet, plugin, codemirror, syntax highlighting, syntaxhighlighting, syntax highlighter, syntaxhighlighter, syntax,
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8A88KC7TFF6CS
Requires at least: 3.9
Tested up to: 4.6
Stable tag: 3.2
License: GPL3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Easily and safely add your custom styles (CSS code) to WordPress website's <head> section directly out of your WordPress Dashboard, without need of an external editor.


== Description ==
An easy to use WordPress plugin that gives you the ability to easily and safely add your custom styles (CSS code) to WordPress website's <head> section, directly out of your WordPress Dashboard, without any need of an external editor.

It's purpose is to provide a familiar experience to WordPress users. No need anymore to editing a files of your theme and/or plugins for to add custom CSS code. Just add your CSS code in the field on the plugin page and this plugin will do the rest for you.

It's really useful in case of any theme/plugin update, because your custom CSS code would never be overwritten. Your custom CSS code will keep on working, no matter how many times you upgrade or switch your theme.

On the plugin page you find the CSS editor powered by CodeMirror. It have syntax highlighting and line numbering options. Also this editor support a tab indentation.

= Features =

* Responsive & Mobile optimized settings page
* Trigger for temporary disable the custom CSS code
* Syntax highlighting (by CodeMirror)
* Line numbering
* Active line highlighting
* Editor allow for tab indentation
* Ready for translation (POT file included)

**Coming soon:**

* Reload the settings page at same position after pushing the save button
* Multisite network support

= Translation =

Please keep in mind that not all translations are up to date. You are welcome to contribute!

* English (default)
* Russian

**Consider Going Pro For Additional Features!**

>**Pro Features**
>
>* Unlimited number of snippets
>* CSS minifier
>* Automatic backup of all snippets to a file
>* Trigger for temporary disable the certain snippets
>* Button for collapse/expand the field with code
>* Sidebar items can be collapsed or expanded
>* Well documented
>
>[Get the premium version now!](https://www.arthurgareginyan.com/plugin-my-custom-styles-pro.html)


== Installation ==
Install "My Custom Styles" just as you would any other WordPress Plugin.

Automatically via WordPress:

1. Log into Dashboard of your WordPress website.
2. Go to "`Plugins`" —> "`Add New`".
3. Find this plugin and click install.
4. Activate this plugin through the "`Plugins`" tab.

Manual via FTP:

1. Download a copy (ZIP file) of this plugin from WordPress.org.
2. Unzip the ZIP file.
3. Upload the unzipped catalog to your website's plugin directory (`/wp-content/plugins/`).
4. Log into Dashboard of your WordPress website.
5. Activate this plugin through the "`Plugins`" tab.

After installation, a "`Custom Styles`" menu item will appear in the "`Appearance`" section. Click on this in order to view plugin's administration page.

[More help installing Plugins](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "WordPress Codex: Installing Plugins")


== Frequently Asked Questions ==
= Q. Will this plugin work on my WordPress.COM website? =
A. Sorry, this plugin is available for use only on self-hosted (WordPress.org) websites.

= Q. Can I use this plugin on my language? =
A. Yes. But If your language is not available then you can make one. This plugin is ready for translation. The `.pot` file is included and placed in "`languages`" folder. Many of plugin users would be delighted if you shared your translation with the community. Just send the translation files (`*.po, *.mo`) to me at the arthurgareginyan@gmail.com and I will include the translation within the next plugin update.

= Q. Does this plugin require modification to the theme? =
A. Absolutely not. This plugin is added/configured entirely from the website's Admin section.

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

= Q. It's not working. What could be wrong? =
A. As with every plugin, it's possible that things don't work. The most common reason for this is that the plugin has a conflict with another plugin you're using. It's impossible to tell what could be wrong exactly, but if you post a support request in the plugin's support forum on WordPress.org, I'd be happy to give it a look and try to help out. Please include as much information as possible, including a link to your website where the problem can be seen.

= Q. Where to report bug if found? =
A. Please visit [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-styles) and report.

= Q. Where to share any ideas or suggestions to make the plugin better? =
A. Please send me email [arthurgareginyan@gmail.com](mailto:arthurgareginyan@gmail.com).

= Q. I love this plugin! Can I help somehow? =
A. Yes, any financial contributions are welcome! Just visit my website and click on the donate link, and thank you! [My website](http://www.arthurgareginyan.com/donate.html)


== Screenshots ==
1. Plugin page.
2. Plugin page with custom CSS code added.


== Other Notes ==

"My Custom Styles" is one of the personal software projects of [Arthur Gareginyan](http://www.arthurgareginyan.com).

**License**

This plugin is licensed under the [GNU General Public License, version 3 (GPLv3)](http://www.gnu.org/licenses/gpl-3.0.html)
and is distributed free of charge.
Commercial licensing (e.g. for projects that can’t use an open-source license) is available upon request.

**Credits**

[CodeMirror](https://codemirror.net/) is an open-source project shared under the [MIT license](https://codemirror.net/LICENSE).

**Links**

* [Developer Website](http://www.arthurgareginyan.com)
* [Dedicated Plugin Page on GitHub](https://github.com/ArthurGareginyan/my-custom-styles)
* [Premium Version](https://www.arthurgareginyan.com/plugin-my-custom-styles-pro.html)


== Changelog ==
= 3.2 =
* On the settings page changed an advertisement about the PRO version of this plugin.
* The Readme.txt file improved.
* Added the Readme.txt file for translation contribution.
= 3.1.1 =
* Link to the premium version of plugin changed.
* The Readme.txt file improved.
= 3.1 =
* Added prefixes to the stylesheet and script names when using wp_enqueue_style() and wp_enqueue_script().
* Added constant for storing the plugin version number.
= 3.0 =
* The structure of files changed.
* Style sheet of settings page improved and better commented.
* JS code improved.
* Donate text added.
= 2.3 =
* Added trigger for temporary disable the custom CSS code.
* Added active-line.js add-on to CodeMirror editor.
* Added function for stoping execution of user entered code if it empty.
* Added function of automatic remove the "successful" message after 3 seconds.
* Removed the default message about successful saving.
* Color of editors border changed to #ddd.
* Styles of settings page optimized for mobile devices.
* The styles.css file better commented.
* The _enqueue_codemirror_scripts function renamed to mcstyles_load_scripts.
* The esc_textarea() removed from the preparing function of user entered code.
= 2.2 =
* CodeMirror library updated to version 5.16.0.
* File js-functions.js renamed to functions.js.
* Added the ad about PRO version of this plugin.
* Removed my personal ad about freelance.
= 2.1 =
* Text domain changed to "my-custom-styles".
* Added compatibility with the translate.wordpress.org.
* All images are moved to the directory "images".
* Image "btn_donateCC_LG.gif" is now located in the "images" directory.
* Strict mode enabled in the file js-functions.js.
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
= 3.0 =
Please update to new release!
= 2.0 =
Please update to new release!
= 1.0 =
Please update to first stable release!
= 0.2 =
Please update to beta version.
