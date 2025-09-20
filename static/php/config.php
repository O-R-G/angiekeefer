<?
/*
    site-specific config
*/

$site_title = 'w-w-w';
$head = 'Second';
$site = 'thoughts';
$home = $head . ", " . $site;
$card_default = '/media/jpg/card-default.jpg';
$logo_src = '/media/jpg/logo.jpg';
$description = 'Second thoughts';
$site_url = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
$site_url .= '://' . $_SERVER['SERVER_NAME'];
$og_locale = 'en_US';
?>
