<?php

/*
  Plugin Name: WP no-iFrames (Content Protection)
  Plugin URI:  http://yooplugins.com/
  Description: WP no-iFrames (Content Protection) is a simple (yet) effective iframe breaking plugin that protects your online content from being embedded into other sites and, in addition will also defend against clickjacking attacks. Go to your <a href="options-general.php?page=wpnf_options">Settings -> WP no-iFrame/no-Clickjacking</a> for support.
  Version: 1.3
  Author: RSPublishing
  Author URI: http://yooplugins.com/
  License: GPLv2 or later
  License URI: http://www.gnu.org/licenses/gpl-2.0.html
  */

/*
  Copyright 2014/2015  Rynaldo Stoltz  (email : rcstoltz@gmail.com)

  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation; either version 2 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

if(is_admin()) {
	add_action('admin_menu', 'cons_menu');
}

function cons_menu() {
	add_options_page('WP no-iFrames', 'WP no-iFrames', 'manage_options', 'wpnf_options', 'return_nf_config');
}

function return_nf_config() {
	require_once('inc/conf.php');
}

$wpnof = new wpnof();

register_activation_hook( WP_PLUGIN_DIR . '/wp-nof/nof.php', array($wpnof, 'activate') );
register_deactivation_hook( WP_PLUGIN_DIR . '/wp-nof/nof.php', array($wpnof, 'deactivate') );

class wpnof {
	public function activate() {
                $this->htac_incl();
	}

    public function deactivate() {
                $this->htac_ent_rem();
        }

	public function htac_incl() {

                $absolutePath = ABSPATH;
				$content .= "\n" . "\n";
                $content .= '# WP no-iFrames by Rynaldo Stoltz Starts - http://yooplugins.com/' . "\n";
				$content .= 'Header always append X-Frame-Options SAMEORIGIN' . "\n";
                $content .= '# WP no-iFrames by Rynaldo Stoltz Ends - http://yooplugins.com/' . "\n" . "\n";
                file_put_contents($absolutePath . '/.htaccess', $content, FILE_APPEND | FILE_TEXT);
        }

		 public function htac_ent_rem() {
                $absolutePath = ABSPATH;
                $fileContent = file_get_contents($absolutePath . '/.htaccess');
				$regex = "#(WP noFrame)(.*)(/WP noFrame)";
                $output = preg_replace($regex,"",$fileContent);
                file_put_contents($absolutePath . '/.htaccess', $output);
        }
}

?>