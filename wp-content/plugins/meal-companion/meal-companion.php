<?php
/*
Plugin Name: Meal Companion Plugin
Plugin URI:
Description: Companion plugin for Meal theme
Version: 1.0
Author: Tanmoy Biswas
Author URI:
License: GPLv2 or later
Text Domain: meal-companion
Domain Path: /languages/
*/


function mealc_load_text_domain(){
    load_plugin_textdomain('mealc_load_text_domain',false,dirname(__FILE__)."/languaegs");
}
add_action('plugins_loaded','mealc_load_text_domain');









































