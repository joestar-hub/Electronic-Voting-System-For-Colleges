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

/**Admin Routes Starts */

$route["addcandidate"]="admin/addcandidate/index";

$route["adminlogin"]="admin/login/index";
$route["admin/login"]="admin/login/index";

$route["managecandidate"]="admin/managecandidate/index";

$route["manageposition"]="admin/manageposition/index";

$route["managevoters"]="admin/managevoters/index";

$route["newposition"]="admin/newposition/index";

$route["admin"]="admin/admin/index";
$route["moredetails/(:any)"]="admin/moredetails/index/$1";
$route["resultdash"]="admin/resultdash/index";
 
$route["positiondetails/(:any)"]="admin/positiondetails/index/$1";
$route["fetch"]="admin/resultdash/fetch";



/**Admin Routes Ends */


/**voters routes  starts*/

$route["login"]="voter/login/index";
$route["setprofile"]="voter/setprofile/index";

$route["votecandidate/(:any)"]="voter/votecandidate/index/$1";

$route["selectposition"]="voter/selectposition/index";
$route["updateprofile"]="voter/updateprofile/index";
$route["votersignup"]="voter/votersignup/index";

$route["votein/(:any)"]="voter/votein/index/$1";
$route["ballotpaper"]="voter/ballotpaper/index";
$route["ballotpaper/process/(:any)/(:any)"]="voter/ballotpaper/process/$1/$2";

/***Voters routes ends */



/**Central Processing Unit for Processing form inputs */



$route["executor/vlogin"]="cpu/executor/vlogin";

$route["executor/vsignup"]="cpu/executor/vsignup";
$route["executor/addcandidate"]="cpu/executor/addcandidate";
$route["executor/adminlogin"]="cpu/executor/adminlogin";
$route["executor/newposition"]="cpu/executor/newposition";



/**End Central Processing Unit */




/**Ajax and control routes */

$route["delete/voter/(:any)"]="cpu/executor/delvoter/$1";
$route["delete/candi/(:any)"]="cpu/executor/delcandi/$1";
$route["delete/posit/(:any)"]="cpu/executor/delposit/$1";



/**Ajax and control routes end */





$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
