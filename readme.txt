=== WP noFrame/noClickjacking ===

Contributors:      RSPublishing
Donate link:       https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=UGF2HGFDWM4ME  
Tags:              iframe, copy protection, frame breaker, content, protect, copyright, theft, clickjacking, frame, content protection, bust, frame buster
Requires at least: 3.0
Tested up to:      4.0
Stable tag:        1.0
License:           GPLv2 or Later
License URI: 	   http://www.gnu.org/licenses/gpl-2.0.html

WP noFrame/noClickjacking is a simple (yet) effective iframe breaking plugin that protects your site content from being embedded into other sites. 

== Description ==

WP noFrame/noClickjacking is a simple (yet) effective frame breaking plugin that protects your site content from being embedded into other sites - effectively defending you against clickjacking attacks.

This lightweight plugin will add the Header always append X-Frame-Options DENY instruction to your .htaccess file - where the DENY rule will prevent ALL domains from framing your content.

The X-Frame-Options headers are however, available in 3 flavors (should you wish to not use the DENY rule):

1. DENY: will prevent ALL domains from framing the content
2. SAMEORIGIN: only allows the current domain to frame the content
3. ALLOW-FROM uri: which only allows a specified uri to frame the content

The DENY rule is simply replaced by either one of the aforementioned headers.

This is a lightweight plugin - simply install and leave. Try it for yourself!

== Installation ==

1. Download the .zip file
2. Upload and extract the contents of the zip file to your wp-content/plugins/folder
3. Activate the Wp noFrame plugin in your WP-admin/Plugins
4. Enjoy!

== Feedback, Questions, Help, Bug Reporting, and Suggestions ==

Just email us at: support@yooplugins.com / Email Subject : WP noFrame or visit us at [YOOPlugins](http://yooplugins.com/)

== Upgrade Notice ==

= Version 1.0 = 

== Screenshots ==

1. WP noFrame Header Output Test

== Frequently Asked Questions ==

= What is WP noFrame? =

WP noFrame is a simple (yet) effective plugin that protects your site content from being embedded into other sites - defending you against clickjacking attacks. 

= What does WP noFrame do? =

WP noFrame adds the X-Frame-Options HTTP response header (DENY) instruction to your root .htaccess in order to prevent your site content from being embedded into other sites. 

= Why not just use Javascript? =

Simply because we believe they are easily bypassed. For example: the user disabled his Javascript! Furthermore, we have come to find that the JS code conflicts with the theme customization in WordPress.

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