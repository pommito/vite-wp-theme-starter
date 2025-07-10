<?php

if (! defined('WP_ENV')) {
    define('WP_ENV', 'development');
}

define("THEME_DIR", get_template_directory());

require_once THEME_DIR . "/inc/assets.php";

