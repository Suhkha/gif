<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Custom routes

//-- Register
$route['register'] = 'register';
$route['register/save'] = 'register/save';

//-- Register
$route['login'] = 'login';
