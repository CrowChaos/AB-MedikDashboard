<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['subject/delete'] = 'subject/delete';
$route['subject/create'] = 'subject/create';
$route['subject/update'] = 'subject/update';
$route['subject/(:any)'] = 'subject/view/$1';

$route['default_controller'] = 'subject/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
