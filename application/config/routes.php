<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
  | -------------------------------------------------------------------------
  | URI ROUTING
  | -------------------------------------------------------------------------
  | This file lets you re-map URI requests to specific controller functions.
  |
  | Typically there is a one-to-one relationship between a URL string
  | and its corresponding controller class/method. The segments in a
  | URL normally follow this pattern:
  |
  |	example.com/class/method/id/
  |
  | In some instances, however, you may want to remap this relationship
  | so that a different class/function is called than the one
  | corresponding to the URL.
  |
  | Please see the user guide for complete details:
  |
  |	https://codeigniter.com/user_guide/general/routing.html
  |
  | -------------------------------------------------------------------------
  | RESERVED ROUTES
  | -------------------------------------------------------------------------
  |
  | There are three reserved routes:
  |
  |	$route['default_controller'] = 'welcome';
  |
  | This route indicates which controller class should be loaded if the
  | URI contains no data. In the above example, the "welcome" class
  | would be loaded.
  |
  |	$route['404_override'] = 'errors/page_missing';
  |
  | This route will tell the Router which controller/method to use if those
  | provided in the URL cannot be matched to a valid route.
  |
  |	$route['translate_uri_dashes'] = FALSE;
  |
  | This is not exactly a route, but allows you to automatically route
  | controller and method names that contain dashes. '-' isn't a valid
  | class or method name character, so it requires translation.
  | When you set this option to TRUE, it will replace ALL dashes in the
  | controller and method URI segments.
  |
  | Examples:	my-controller/index	-> my_controller/index
  |		my-controller/my-method	-> my_controller/my_method
 */
$config['permitted_uri_chars'] = 'a-z 0-9~%.:_\-@\=';

$route['default_controller'] = 'Shop';
$route['404_override'] = 'Shop/error404';
$route['translate_uri_dashes'] = FALSE;
$route['contact-us'] = 'Shop/contactus';
$route['booking'] = 'Shop/appointment';
$route['subscribe'] = 'Shop/subscribe';
$route['lookbook'] = 'Shop/lookbook';
$route['the-process'] = 'Shop/process';
$route['faqs'] = 'Shop/faqs';
$route['lookbook/(:any)'] = 'Shop/lookbook_style/$1';
$route['Products/CustomSuits'] = 'Product/ProductList/2/0';
$route['Products/CustomShirts'] = "Product/ProductList/1/0";
$route['Products/CustomJackets'] = "Product/ProductList/4/0";
$route['ShopNow'] = 'Product/ProductList/2/0';
$route['stylingTips'] = 'Shop/stylingTips';
$route['stylingTipsTag'] = 'Shop/stylingTipsTag';
$route['styleTips/(:any)/(:any)'] = 'Shop/styleTipsDetails/$1/$2';
$route['sitemap\.xml'] = "Sitemap/index";
$route['sitemap'] = "Sitemap/general";
$route['admin'] = "Shop/locallogin";
$route['references'] = "Shop/references";

