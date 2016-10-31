<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'register';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Custom routes

//-- Register
$route['register'] = 'register';
$route['register/save'] = 'register/save';

//-- Login
$route['login'] = 'login';

//-- Gifs
$route['gif'] = 'gif';
$route['gif/partial_view'] = 'gif/partial_view';
$route['gif/save'] = 'gif/save';
$route['gallery'] = 'gif/gallery';