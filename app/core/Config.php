<?php

// SITE PRESETS
define('SITE_ROOT', dirname(__FILE__, 3)); // DO NOT CHANGE
define('SITE_URL', 'https://'.$_SERVER['SERVER_NAME']); // DO NOT CHANGE

// Website Name
define('SITE_NAME', 'proxied.wtf');

// Website Description
define('SITE_DESC', 'Proxied is your go-to place for malicious tools.');

/**
 * Folder name should be defined starting with the "/" (slash)
 * 
 * If you do not plan on having it in a subdomain,
 * keep '' empty without a "/" (slash)
 * example: define('SUB_DIR', '');
 */
define('SUB_DIR', '/panel');

// Loader link // From Root folder
define('LOADER_URL', SITE_ROOT.'/x.exe');

// API key
define('API_KEY', 'yes');