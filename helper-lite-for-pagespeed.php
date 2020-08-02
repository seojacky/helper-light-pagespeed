<?php
/**
 * Plugin name: Helper Lite for PageSpeed
 * Description: Speed up your site with attributes decoding="async" & loading="lazy" for &lt;img&gt; and &lt;iframe&gt;. Removes problem "Does not use passive listeners to improve scrolling performance". Help to Up Your Google PageSpeed Insights Score. | <a href="https://t.me/wp_booster" target="blank_">WP Boost support</a> | <a href="https://github.com/seojacky/helper-lite-for-pagespeed" target="blank_">GitHub</a>
 * Version: 3.0
 * Author: seojacky, Каренина
 * Author URI: https://t.me/big_jacky
 * Plugin URI: https://wordpress.org/plugins/helper-lite-for-pagespeed/
 * GitHub Plugin URI: https://github.com/seojacky/helper-lite-for-pagespeed
 * Text Domain: helper-lite-for-pagespeed
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

namespace Karenina\HelperLightForPageSpeed;

defined('ABSPATH') or exit('No direct script access allowed');

define('HLFP_FILE', __FILE__);
define('HLFP_DIR', __DIR__);
define('HLFP_URL', plugin_dir_url(__FILE__));
define('HLFP_VERSION', '3.0');
define('HLFP_TITLE', __('PageSpeed Helper', 'helper-lite-for-pagespeed'));

if (!file_exists(HLFP_DIR . '/vendor/autoload.php'))
{
    exit('No autoload found for helper-lite-for-pagespeed plugin!');
}

require_once HLFP_DIR . '/vendor/autoload.php';

$helper_light_for_page_speed = new Main();