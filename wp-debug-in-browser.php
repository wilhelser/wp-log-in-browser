<?php
/*
Plugin Name: WP Debug in Browser
Description: Allows you to send debug info to your browser console.
Version: 0.1
Author: Daniel Dvorkin
Author URI: http://danieldvork.in
License: GPLv2 or later
*/

include 'classes/Browser.interface.php';
include 'classes/BrowserAdmin.class.php';
include 'classes/Browser.class.php';

Browser::instance();