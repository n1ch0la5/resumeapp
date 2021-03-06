<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

function getUriSegments() {
    return explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
}
 
function getUriSegment($n) {
    $segs = getUriSegments();
    return count($segs)>0&&count($segs)>=($n-1)?$segs[$n]:'';
}

if( getUriSegment(1) == 'rest' )
{
	$route['default_controller'] = "rest/".getUriSegment(2);
}
else
{
	$route['default_controller'] = "pages";
	$route['404_override'] = '';

	$route['migrate'] = "migrate";
    $route['auth'] = "auth";
	$route['auth/(:any)'] = "auth/$1";
    //linkedin auth controller routes
    $route['oauth'] = "oauths";
    $route['oauth/(:any)'] = "oauths/$1";
	// Keep the following line at the bottom
	$route['(:any)'] = "pages/$1";
}

/* End of file routes.php */
/* Location: ./application/config/routes.php */