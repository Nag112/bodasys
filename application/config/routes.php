<?php
defined('BASEPATH') || exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = 'home/notfound';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = "home/about";
$route['career'] = "home/career";
$route['contact'] = "home/contact";
$route['portfolio'] = "home/portfolio";
$route['services'] = "home/services";