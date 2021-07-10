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
$route['printposte']['post'] = "poste/Poste_controller/printListPosteToPdf";
$route['env'] = "environnement/Env_controller/indexPep";
$route['dev'] = "dev/Dev_controller/indexap";
$route['printcmv']['post'] = "dev/Dev_controller/printCmv";
$route['printap']['post'] = "dev/Dev_controller/printAp";
$route['printagr']['post'] = "dev/Dev_controller/printAgr";
$route['devParentbyT(:any)'] = "dev/Dev_controller/getParentByTitre/$1";
$route['devac'] = "dev/Dev_controller/userList";
$route['devdelap/(:any)'] = "dev/Dev_controller/deleteAP/$1";
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
$route['sec'] = "sec/Sec_controller/indexvst";
$route['secplan'] = "sec/Sec_controller/indexplan";
#parent
$route['pare'] = "parent/Parent_controller/index";
$route['paresave']['post'] = "parent/Parent_controller/saveparent";
$route['printparent']['post'] = "parent/Parent_controller/printParent";
$route['paredelete/(:any)'] = "parent/Parent_controller/deleteparent/$1";
#suivi
$route['savenote']['post'] = "suiv/Suiv_controller/saveNote";
$route['getnote/(:any)'] = "suiv/Suiv_controller/getNoteEleve/$1";

#palnning
$route['secplanload'] = "sec/Sec_controller/load";
$route['secplanupdate']['post'] = "sec/Sec_controller/update";
$route['secplandel']['post'] = "sec/Sec_controller/delete";
$route['secplaninsert']['post'] = "sec/Sec_controller/insert";
#planning
$route['en'] = "entre/En_controller/index";
$route['enpers'] = "entre/En_controller/indexpers";
$route['encong'] = "entre/En_controller/indexcong";
$route['enbien'] = "entre/En_controller/indexbien";
$route['ensavedep']['post'] = "entre/En_controller/saveDep";
$route['ensavepers']['post'] = "entre/En_controller/savePers";
$route['ensavecong']['post'] = "entre/En_controller/saveCong";
$route['ensavebien']['post'] = "entre/En_controller/saveBien";
$route['enprintdep'] = "entre/En_controller/printDep";
$route['enprintpers']['post'] = "entre/En_controller/printPers";
$route['enprintcong']['post'] = "entre/En_controller/printCong";
$route['enprintbien']['post'] = "entre/En_controller/printBien";

$route['endeletedep/(:any)'] = "entre/En_controller/deleteDep/$1";
$route['endeletepers/(:any)'] = "entre/En_controller/deletePers/$1";
$route['endeletecong/(:any)'] = "entre/En_controller/deleteCong/$1";
$route['endeletebien/(:any)'] = "entre/En_controller/deleteBien/$1";

$route['secpass'] = "sec/Sec_controller/indexpass";
$route['secsavevis']['post'] = "sec/Sec_controller/savevis";
$route['secsavepass']['post'] = "sec/Sec_controller/savepass";
$route['secprintvis']['post'] = "sec/Sec_controller/printVis";
$route['secprintPass'] = "sec/Sec_controller/printPass";
$route['secdelvis/(:any)'] = "sec/Sec_controller/deleteVis/$1";
$route['secdelpass/(:any)'] = "sec/Sec_controller/deletePass/$1";
$route['tour'] = "tour/Tour_controller/indexHtl";
$route['printtourrsrv'] = "tour/Tour_controller/printReserv";
$route['tourtrst'] = "tour/Tour_controller/indexTouriste";
$route['savetourvs']['post'] = "tour/Tour_controller/savevs";
$route['printtourtrst']['post'] = "tour/Tour_controller/printTrst";
$route['printtourvs']['post'] = "tour/Tour_controller/printVs";
$route['tourtrstsave']['post'] = "tour/Tour_controller/saveTrst";
$route['tourtrstlog'] = "tour/Tour_controller/indexTouristLog";
$route['tourvs'] = "tour/Tour_controller/indexVsv";
$route['toursaveres']['post'] = "tour/Tour_controller/saveReserv";
$route['tourdeltrst/(:any)'] = "tour/Tour_controller/deleteTrst/$1";
$route['tourdelvs/(:any)'] = "tour/Tour_controller/deleteVs/$1";
$route['tourdeletereserv/(:any)/(:num)']= "tour/Tour_controller/deletereserv/$1/$2";
$route['devcmv'] = "dev/Dev_controller/indexcmv";
$route['filtercmv']['post'] = "dev/Dev_controller/filtrecmv";
$route['devagr'] = "dev/Dev_controller/indexagr";
$route['envaep'] = "environnement/Env_controller/indexAep";
$route['vp'] = "visite_poste/Visite_poste_controller/index";
$route['printvp'] = "visite_poste/Visite_poste_controller/printlistvp";
$route['el'] = "eleve/Eleve_controller/index";
$route['printeleve']['post'] = "eleve/Eleve_controller/printlistel";
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
