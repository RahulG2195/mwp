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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// service 
$route['service'] = 'Service/index';
$route['service2'] = 'Service/Service2';
$route['service4'] = 'Service/Service4';
$route['service6'] = 'Service/Service6';

// blog 
$route['blog-detail'] = 'Blog/Blog_detail';

$route['gallery-detail'] = 'Gallery/Gallery_detail';

// front vendor 
$route['vendor-detail'] = 'Vendor/Vender_Detail';
$route['vendor-detail/(:any)/(:any)'] = 'Vendor/Vender_Detail/$1/$2';
$route['Single-Vendor/(:any)'] = 'Vendor/Get_vendor_By_Cat/$1';
$route['(:any)-in-(:any)'] = 'Filter/index';
$route['Citys/(:any)'] = 'Vendor/Get_City_vendor/$1';

$route['bridal-makeup'] = 'Vendor/Bridal_Makeup';
$route['bridal-jewellery'] = 'Vendor/Bridal_Jewellery';
$route['Bridal-Wear'] = 'Vendor/Bridal_Wear';
$route['catering'] = 'Vendor/Catering';
$route['decorators'] = 'Vendor/Decorators';
$route['groom-wear'] = 'Vendor/Groom_Wear';
$route['mehendi-artist'] = 'Vendor/Mehendi_Artist';
$route['photography'] = 'Vendor/Photography';
$route['venue'] = 'Vendor/Venue';
$route['wedding-gift'] = 'Vendor/Wedding_Gifts';
$route['wedding-invitation'] = 'Vendor/Wedding_Invitation';
// Trusted vendor 
$route['Trusted-Vendor'] = 'Vendor/TrustedVendor';
$route['Trusted-Vendor/(:any)'] = 'Vendor/TrustedVendor/$1';

// $route['(:any)-in-(:any)'] = 'Filter/Load_more_data';
// thank you 
$route['registration/thankyou'] = 'thankyou';

// vendor panel 
$route['Vendor-Login'] = 'VendorPanel/Login';
$route['vendor-dashboard'] = 'VendorPanel/Vendor_Dashboard';
$route['vendor-dashboard/lead/(:any)'] = 'VendorPanel/Vendor_Dashboard/lead/$1';
$route['vendor-dashboard/visitor/(:any)'] = 'VendorPanel/Vendor_Dashboard/visitor/$1';
$route['vendor-dashboard/plan/(:any)'] = 'VendorPanel/Vendor_Dashboard/plan/$1';
$route['Vendor-Logout'] = 'VendorPanel/Login/logout';
$route['Data/(:any)/(:any)'] = 'VendorPanel/Admin_Vendor/Vendor_all_Data/$1/$2';
$route['Single_data/(:any)/(:any)'] = 'admin/Admin_Vendor/Vendor_all_Data/$1/$2';

//Main page
$route['about-my-wedding-palette'] = 'Aboutus/index';
$route['trends-and-ideas-for-wedding-photos'] = 'Gallery/index';
$route['contact-us'] = 'contactus/index';

//Service pages
$route['service/wedding-planning'] = 'service/weddingplanning';
$route['service/vendor-recommendation-for-wedding'] = 'service/vendorrecommendation';
$route['service/customized-wedding-add-ons'] = 'service/customized_wedding_add_ons';
$route['service/destination-wedding'] = 'service/Destination_Wedding';
$route['service/wedding-decoration-design-ideas'] = 'service/Design_and_Decor';
$route['service/wedding-planning-tool'] = 'service/Wedding_Planning_Tool';




