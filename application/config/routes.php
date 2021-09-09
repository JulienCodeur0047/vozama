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
$route['usermgr'] = "Login_controller/userManager";
$route['deluser/(:any)'] = "Login_controller/deleteUser/$1";
$route['saveuser']['post'] = "Login_controller/saveUser";
$route['printposte']['post'] = "poste/Poste_controller/printListPosteToPdfU";
$route['env'] = "environnement/Env_controller/indexPep";
$route['envn'] = "environnement/Env_controller/indexEnv";
$route['envdelpep/(:any)'] = "environnement/Env_controller/deletePepiniere/$1";
$route['envdelaep/(:any)'] = "environnement/Env_controller/deleteAep/$1";


$route['dev'] = "dev/Dev_controller/indexap";
$route['printcmv']['post'] = "dev/Dev_controller/printCmv";
$route['printap']['post'] = "dev/Dev_controller/printAp";
$route['printagr']['post'] = "dev/Dev_controller/printAgr";
$route['devParentbyT(:any)'] = "dev/Dev_controller/getParentByTitre/$1";
$route['devac'] = "dev/Dev_controller/userList";
$route['devdelap/(:any)'] = "dev/Dev_controller/deleteAP/$1";
$route['suiv'] = "suiv/Suiv_controller/indexel";
$route['suivel'] = "suiv/Suiv_controller/indexel";
$route['suivec'] = "suiv/Suiv_controller/indexec";
$route['suivmn'] = "suiv/Suiv_controller/indexmn";
$route['suivmon'] = "suiv/Suiv_controller/indexmoniteur";
$route['suivdn'] = "suiv/Suiv_controller/indexdn";
$route['suivsavemoniteur']['post'] = "suiv/Suiv_controller/saveMoniteur";
$route['suivdeldn/(:any)'] = "suiv/Suiv_controller/deleteDn/$1";
$route['suivdelmn/(:any)'] = "suiv/Suiv_controller/deleteMoniteur/$1";
$route['suivresetnote/(:any)'] = "suiv/Suiv_controller/resetNote/$1";

$route['com'] = "com/Com_controller/indexparr";
$route['comsaveparr']['post'] = "com/Com_controller/saveparr";
$route['comsavepart']['post'] = "com/Com_controller/savepart";
$route['comsaveres']['post'] = "com/Com_controller/saveres";
$route['comdeleteres/(:any)'] = "com/Com_controller/deleteres/$1";
$route['comdeleteent/(:any)'] = "com/Com_controller/deleteEnt/$1";
$route['printcomparr']['post'] = "com/Com_controller/printParr";
$route['printcompart'] = "com/Com_controller/printPart";
$route['printcomres']['post'] = "com/Com_controller/printRes";
$route['compart'] = "com/Com_controller/indexpart";
$route['comres'] = "com/Com_controller/indexres";
$route['sec'] = "sec/Sec_controller/indexvst";
$route['planning'] = "sec/Sec_controller/indexplan";
#parent
$route['pare'] = "parent/Parent_controller/index";
$route['paresave']['post'] = "parent/Parent_controller/saveparent";
$route['printparent']['post'] = "parent/Parent_controller/printParent";
$route['paredelete/(:any)'] = "parent/Parent_controller/deleteparent/$1";
#suivi
$route['savenote']['post'] = "suiv/Suiv_controller/saveNote";
$route['saveeco']['post'] = "suiv/Suiv_controller/saveEcolage";
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
$route['enstk'] = "entre/En_controller/indexstk";
$route['ensavedep']['post'] = "entre/En_controller/saveDep";
$route['eninstk']['post'] = "entre/En_controller/saveStk";
$route['enoutstk']['post'] = "entre/En_controller/saveOutStk";
$route['ensavepers']['post'] = "entre/En_controller/savePers";
$route['ensavecong']['post'] = "entre/En_controller/saveCong";
$route['ensavebien']['post'] = "entre/En_controller/saveBien";
$route['enprintdep'] = "entre/En_controller/printDep";
$route['enprintpers']['post'] = "entre/En_controller/printPers";
$route['enprintcong']['post'] = "entre/En_controller/printCong";
$route['enprintbien']['post'] = "entre/En_controller/printBien";
$route['enprintstk']['post'] = "entre/En_controller/printStk";
$route['enprintmvt']['post'] = "entre/En_controller/printMvt";

$route['endeletedep/(:any)'] = "entre/En_controller/deleteDep/$1";
$route['endeletepers/(:any)'] = "entre/En_controller/deletePers/$1";
$route['endeletecong/(:any)'] = "entre/En_controller/deleteCong/$1";
$route['endeletebien/(:any)'] = "entre/En_controller/deleteBien/$1";
$route['endeletestk/(:any)'] = "entre/En_controller/deleteStk/$1";

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
$route['tourchmbr'] = "tour/Tour_controller/indexChmbre";
$route['savechmbr']['post'] = "tour/Tour_controller/saveChmbre";
$route['savetourvs']['post'] = "tour/Tour_controller/savevs";
$route['printtourtrst']['post'] = "tour/Tour_controller/printTrst";
$route['printtourvs']['post'] = "tour/Tour_controller/printVs";
$route['printtourfc']['post'] = "tour/Tour_controller/printFacture";
$route['printlschmbr'] = "tour/Tour_controller/printChrxx";
$route['tourtrstsave']['post'] = "tour/Tour_controller/saveTrst";
$route['tourtrstlog'] = "tour/Tour_controller/indexTouristLog";
$route['tourvs'] = "tour/Tour_controller/indexVsv";
$route['toursaveres']['post'] = "tour/Tour_controller/saveReserv";
$route['tourdeltrst/(:any)'] = "tour/Tour_controller/deleteTrst/$1";
$route['tourdelvs/(:any)'] = "tour/Tour_controller/deleteVs/$1";
$route['tourdelch/(:any)'] = "tour/Tour_controller/deleteChmbr/$1";
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
$route['saveeglise']['post'] = "poste/Poste_controller/saveEglise";
$route['deleglise/(:any)'] = "poste/Poste_controller/deleteEglise/$1";
$route['savesecteur']['post'] = "poste/Poste_controller/saveSecteur";
$route['delsecteur/(:any)'] = "poste/Poste_controller/deleteSecteur/$1";
$route['savezone']['post'] = "poste/Poste_controller/saveZone";
$route['delzone/(:any)'] = "poste/Poste_controller/deleteZone/$1";
$route['saveregion']['post'] = "poste/Poste_controller/saveRegion";
$route['delregion/(:any)'] = "poste/Poste_controller/deleteRegion/$1";
$route['savecisco']['post'] = "poste/Poste_controller/saveCisco";
$route['delcisco/(:any)'] = "poste/Poste_controller/deleteCisco/$1";
$route['savecomune']['post'] = "poste/Poste_controller/saveCommune";
$route['delcommune/(:any)'] = "poste/Poste_controller/deleteCommune/$1";
$route['saveniveau']['post'] = "poste/Poste_controller/saveNiveau";
$route['delniveau/(:any)'] = "poste/Poste_controller/deleteNiveau/$1";
$route['savefkt']['post'] = "poste/Poste_controller/saveFkt";
$route['delfkt/(:any)'] = "poste/Poste_controller/deleteFkt/$1";
$route['savedistrict']['post'] = "poste/Poste_controller/saveDistrict";
$route['deldistrict/(:any)'] = "poste/Poste_controller/deleteDistrict/$1";
$route['savepere']['post'] = "poste/Poste_controller/savePere";
$route['delpere/(:any)'] = "poste/Poste_controller/deletePere/$1";
$route['savepref']['post'] = "poste/Poste_controller/savePref";
$route['delpref/(:any)'] = "poste/Poste_controller/deletePref/$1";
$route['savemoniteur']['post'] = "poste/Poste_controller/saveMoniteur";
$route['delmoniteur/(:any)'] = "poste/Poste_controller/deleteMoniteur/$1";
$route['saveinspe']['post'] = "poste/Poste_controller/saveInspecteur";
$route['delinspe/(:any)'] = "poste/Poste_controller/deleteInspecteur/$1";
$route['savequartier']['post'] = "poste/Poste_controller/saveQuartier";
$route['delquartier/(:any)'] = "poste/Poste_controller/deleteQuartier/$1";
$route['tbaplh'] = "poste/Poste_controller/indextb";

$route['saveposte']['post'] = "poste/Poste_controller/save";
$route['savepep']['post'] = "environnement/Env_controller/savepep";
$route['saveenv']['post'] = "environnement/Env_controller/saveenv";
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
$route['deleteeleve/(:any)'] = "poste/Poste_controller/deleteeleve/$1";
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
