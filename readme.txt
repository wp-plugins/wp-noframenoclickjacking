=== WP no-iFrames (Content Protection) ===

Contributors:      RSPublishing
Donate link:       https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UGF2HGFDWM4ME  
Tags:              iframe, frame breaker, protect, copyright, theft, clickjacking, frame, content protection, frame buster, X-Frame, iframe buster, iframes
Requires at least: 3.0
Tested up to:      4.2.2
Stable tag:        1.3
License:           GPLv2 or Later
License URI: 	   http://www.gnu.org/licenses/gpl-2.0.html

WP no-iFrames (Content Protection) is a simple, yet effective iframe breaking plugin that protects your site content from being embedded into other sites. 

== Description ==

WP no-iFrames (Content Protection) is a simple, yet effective iframe breaking plugin that will protect your site content from being embedded into other sites - effectively defending you against clickjacking attacks.

This lightweight plugin will add the Header always append X-Frame-Options SAMEORIGIN rule to your root .htaccess file - where the SAMEORIGIN rule will allow embeds only from YOUR site and prevent embeds from ANY other domains.

The X-Frame-Options headers are however, available in 3 flavors (should you wish to not use the DENY rule):

1. DENY: will prevent ALL domains from framing the content (including your own)
2. SAMEORIGIN: only allows the current domain (your own) to frame the content
3. ALLOW-FROM uri: which only allows a specified uri to frame the content

The SAMEORIGIN rule is simply replaced by either one of the aforementioned headers and can be done directly in your root .htaccess file

This is a lightweight plugin - simply install and leave. Try it for yourself!

The WP no-iFrames (Content Protection) plugin is maintained by [YOOPlugins.com](http://yooplugins.com/) and [WP Emergency Room](http://wpemergencyroom.com/)

== Installation ==

1. Download the .zip file
2. Upload and extract the contents of the zip file to your wp-content/plugins/folder
3. Activate the Wp noFrame plugin in your WP-admin/Plugins
4. Enjoy!

== Feedback, Questions, Help, Bug Reporting, and Suggestions ==

Just email us at: rcstoltz@gmail.com / Email Subject : WP no-iFrames (Content Protection) or visit us at [YOOPlugins](http://yooplugins.com/)

== Upgrade Notice ==

= Version 1.3 = 

== Screenshots ==

1. WP no-iFrames Header Output Test

== Frequently Asked Questions ==

= What is WP no-iFrames (Content Protection)? =

WP no-iFrames (Content Protection) is a simple (yet) effective plugin that protects your site content from being embedded into other sites - defending you against clickjacking attacks. 

= What does WP no-iFrames (Content Protection) do? =

WP noFrame adds the X-Frame-Options HTTP response header (SAMEORIGIN) instruction to your root .htaccess in order to prevent your site content from being embedded into other sites (with the exception of your own). 

= Why not just use Javascript? =

Simply because JS is easily bypassed. For example: the user disabled his Javascript! Furthermore, we have come to find that the JS code conflicts with the theme customization in WordPress.

= Will this work on nginx servers? =

This plugin was specifically created for Apache based servers. However, the following line of code can be added to your nginx configuration: `add_header X-Frame-Options 
SAMEORIGIN;`

= What if I don't have server level access? =

If you don't have server level access, you can add the following line of code between the `<head>` and `</head>` tag of your pages: `<meta http-equiv="X-FRAME-OPTIONS" content="DENY">`

= How do I verify that it is working? =

You can pretty much use any web developer tool to view the response headers. Recommended online tool to verify: [Header Checker](http://webstak.com/web-tools/header-checker)

= Why am I getting a 500 internal server error? =

Please check that you have the Apache mod_rewrite and mod_headers enabled. You can ask your host about this if you are unsure.

__The instruction options__

* DENY: This option means the page can never be framed by any page, including a page with the same origin.
* SAMEORIGIN: This option means the page can be framed, but only by another page with the same origin.
* ALLOW-FROm uri: This option means the page can be framed, but only by the specified origin. The uri is replaced with the allowed specified origin.

== Changelog ==

= 0.7 =
* First release version

= 0.8 = 
* fixed redeclare issue (conflicted with WP Content Copy Protection)

= 0.9 = 
* tested 4.0 compatibility 
* general housekeeping

= 1.0 =
* general housekeeping
* url changes and support email changes

= 1.1 =
* changed plugin name, support email, readme file
* tested compatibility with core 4.1.2
* updated version number
* general housekeeping
* added icons

= 1.2 =
* tested compatibility with core 4.2.2
* added banner and icon assets
* updated version number
* general housekeeping

= 1.3 =
* changed DENY rule to SAMEORIGIN rule as some users need embeds on own domain
* name change (more relavant in search terms)
* keywords changes and readme update