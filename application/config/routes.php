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
//$route['default_controller'] = 'welcome'; userCRUD/create
$route['default_controller'] = 'login_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//[nameURL] methode "url to controller" use nameURL in code to replace "controller/methode"
$route['login_process'] = "Login_controller/doLogin";
$route['navbar'] = "Login_controller/navbar";
$route['logout'] = "Login_controller/index";
$route['home'] = "Login_controller/welcome";
$route['alph'] = "poste/Poste_controller/index";
$route['printposte'] = "poste/Poste_controller/printListPosteToPdf";
$route['env'] = "environnement/Env_controller/indexPep";
$route['dev'] = "dev/Dev_controller/indexap";
$route['printcmv']['post'] = "dev/Dev_controller/printCmv";
$route['printap']['post'] = "dev/Dev_controller/printAp";
$route['printagr']['post'] = "dev/Dev_controller/printAgr";
$route['devParentbyT(:any)'] = "dev/Dev_controller/getParentByTitre/$1";
$route['devac'] = "dev/Dev_controller/userList";
$route['suiv'] = "suiv/Suiv_controller/indexpr";
$route['suivel'] = "suiv/Suiv_controller/indexel";
$route['suivec'] = "suiv/Suiv_controller/indexec";
$route['suivmn'] = "suiv/Suiv_controller/indexmn";
$route['com'] = "com/Com_controller/indexparr";
$route['comsaveparr']['post'] = "com/Com_controller/saveparr";
$route['comsavepart']['post'] = "com/Com_controller/savepart";
$route['comsaveres']['post'] = "com/Com_controller/saveres";
$route['comdeleteres/(:any)'] = "com/Com_controller/deleteres/$1";
$route['printcomparr']['post'] = "com/Com_controller/printParr";
$route['printcompart']['post'] = "com/Com_controller/printPart";
$route['printcomres']['post'] = "com/Com_controller/printRes";
$route['compart'] = "com/Com_controller/indexpart";
$route['comres'] = "com/Com_controller/indexres";
$route['tour'] = "tour/Tour_controller/indexHtl";
$route['tourtrst'] = "tour/Tour_controller/indexTouriste";
$route['tourtrstlog'] = "tour/Tour_controller/indexTouristLog";
$route['tourvs'] = "tour/Tour_controller/indexVsv";
$route['toursaveres']['post'] = "tour/Tour_controller/saveReserv";
$route['tourdeletereserv/(:any)/(:num)']= "tour/Tour_controller/deletereserv/$1/$2";
$route['devcmv'] = "dev/Dev_controller/indexcmv";
$route['filtercmv']['post'] = "dev/Dev_controller/filtrecmv";
$route['devagr'] = "dev/Dev_controller/indexagr";
$route['envaep'] = "environnement/Env_controller/indexAep";
$route['vp'] = "visite_poste/Visite_poste_controller/index";
$route['printvp'] = "visite_poste/Visite_poste_controller/printlistvp";
$route['el'] = "eleve/Eleve_controller/index";
$route['printeleve'] = "eleve/Eleve_controller/printlistel";
$route['createposte'] = "poste/Poste_controller/create";
$route['saveposte']['post'] = "poste/Poste_controller/save";
$route['savepep']['post'] = "environnement/Env_controller/savepep";
$route['savecmv']['post'] = "dev/Dev_controller/savecmv";
$route['saveagr']['post'] = "dev/Dev_controller/saveagr";
$route['saveaep']['post'] = "environnement/Env_controller/saveaep";
$route['updateaep']['post'] = "environnement/Env_controller/updateaep";
$route['updatepep']['post'] = "environnement/Env_controller/updatepep";
$route['savepv']['post'] = "visite_poste/Visite_poste_controller/save";
$route['updatevp/(:any)']['post'] = "visite_poste/Visite_poste_controller/update/$1";
$route['editv(:num)'] = "visite_poste/Visite_poste_controller/edit/$1";
$route['deleteVp/(:any)'] = "visite_poste/Visite_poste_controller/delete/$1";
$route['deletePoste/(:any)'] = "poste/Poste_controller/delete/$1";
$route['deletedevcmv/(:any)'] = "dev/Dev_controller/deleteCmv/$1";
$route['deletedevagr/(:any)'] = "dev/Dev_controller/deleteAgr/$1";
$route['deleteElevePoste/(:any)/(:num)'] = "eleve/Eleve_controller/deleteElevePoste/$1/$2";
$route['editPoste(:num)'] = "poste/Poste_controller/edit/$1";
$route['showPoste(:num)'] = "poste/Poste_controller/showDetail/$1";
$route['showEleve(:num)'] = "eleve/Eleve_controller/showEleveDetail/$1";
$route['showvp(:num)'] = "visite_poste/Visite_poste_controller/show/$1";
$route['updatePoste/(:any)']['post'] = "poste/Poste_controller/update/$1";
$route['saveEleve(:num)']['post'] = "eleve/Eleve_controller/insertEleve/$1";
$route['saveEleveNew']['post'] = "eleve/Eleve_controller/insertAll";




$route['userCreate'] = "user_controller/create";
$route['userStore']['post'] = "user_controller/store";
$route['userShow/(:num)'] = "user_controller/show/$1";
$route['userDelete/(:any)'] = "user_controller/delete/$1"; // **
$route['userEdit/(:any)'] = "user_controller/edit/$1";
$route['userUpdate/(:any)']['post'] = "user_controller/update/$1";
