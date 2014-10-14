<?php

/*
Plugin Name: WP noFrame/noClickjacking
Plugin URI:  http://yooplugins.com/
Description: WP noFrame/noClickjacking is a simple (yet) effective iframe breaking plugin that protects your online content from being embedded into other sites - effectively defending you against clickjacking attacks. Go to your <a href="options-general.php?page=wpnf_options">Settings -> WP noFrame/noClickjacking</a> for support.
Version: 1.0
Author: Rynaldo Stoltz
Author URI: http://yooplugins.com/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
  
*/

if(is_admin()) {
	add_action('admin_menu', 'cons_menu');
}

function cons_menu() {
	add_options_page('WP noFrame', 'WP noFrame', 'manage_options', 'wpnf_options', 'return_nf_config');
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
                $content .= '# WP noFrame by Rynaldo Stoltz Starts - http://yooplugins.com/' . "\n";
				$content .= 'Header always append X-Frame-Options DENY' . "\n";
                $content .= '# WP noFrame by Rynaldo Stoltz Ends - http://yooplugins.com/' . "\n" . "\n";
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