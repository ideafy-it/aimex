<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'homes';
$route['(:any)'] = 'homes/view/$1';
$route['admins/(:any)'] = 'admins/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
