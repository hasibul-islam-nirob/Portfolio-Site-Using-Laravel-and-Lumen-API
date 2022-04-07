<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// ============  Chart Data Routing Start ==================
$router->get('/chartData', ['Middleware'=>'auth' ,'uses'=>'ChartDataController@onAllSelect']);
$router->post('/chartCreate', ['Middleware'=>'auth' ,'uses'=>'ChartDataController@onCreateChartData']);
$router->post('/chartUpdate', ['Middleware'=>'auth' ,'uses'=>'ChartDataController@onUpdateChartData']);
$router->post('/chartDelete', ['Middleware'=>'auth' ,'uses'=>'ChartDataController@onADeleteChartData']);
// ============  Chart Data Routing End ==================

// ============  Contact Routing Start ==================
$router->get('/allContact', ['Middleware'=>'auth' ,'uses'=>'ContactTableController@onSelectContacts']);
$router->post('/contactSend', ['Middleware'=>'auth' ,'uses'=>'ContactTableController@onContactSend']);
$router->post('/contactDetails', ['Middleware'=>'auth' ,'uses'=>'ContactTableController@onContactDetails']);
$router->post('/contactDelete', ['Middleware'=>'auth' ,'uses'=>'ContactTableController@onContactDelete']);
$router->post('/contactRead', ['Middleware'=>'auth' ,'uses'=>'ContactTableController@onContactRead']);
$router->post('/contactUnRead', ['Middleware'=>'auth' ,'uses'=>'ContactTableController@onContactUnRead']);
// ============  Contact Routing End ==================

// ============ Course Routing Start ==================
$router->get('/courseHome', ['Middleware'=>'auth' ,'uses'=>'CourseTableController@onSelectFour']);
$router->get('/courseAll', ['Middleware'=>'auth' ,'uses'=>'CourseTableController@onSelectAll']);
$router->post('/courseDetails', ['Middleware'=>'auth' ,'uses'=>'CourseTableController@onSelectDetails']);
$router->post('/courseCreate', ['Middleware'=>'auth' ,'uses'=>'CourseTableController@onCreateCourse']);
$router->post('/courseUpdate', ['Middleware'=>'auth' ,'uses'=>'CourseTableController@onCourseUpdate']);
$router->post('/courseDelete', ['Middleware'=>'auth' ,'uses'=>'CourseTableController@onCourseDelete']);
// ============ Course Routing End ==================

// ============  Client Review  Routing Start ==================
$router->get('/allReviews', ['Middleware'=>'auth' ,'uses'=>'ClientReviewController@onAllSelect']);
$router->post('/createReview', ['Middleware'=>'auth' ,'uses'=>'ClientReviewController@onCreateReview']);
$router->post('/updateReview', ['Middleware'=>'auth' ,'uses'=>'ClientReviewController@onUpdateReview']);
$router->post('/deleteReview', ['Middleware'=>'auth' ,'uses'=>'ClientReviewController@onDeleteReview']);
$router->post('/detailsReview', ['Middleware'=>'auth' ,'uses'=>'ClientReviewController@onDetailsReview']);
// ============  Client Review  Routing End ==================

// ============  Footer Routing Start ==================
$router->get('/allFooter', ['Middleware'=>'auth' ,'uses'=>'FooterTableController@onAllSelect']);
$router->post('/CreateFooter', ['Middleware'=>'auth' ,'uses'=>'FooterTableController@onCreateFooter']);
$router->post('/updateFooter', ['Middleware'=>'auth' ,'uses'=>'FooterTableController@onUpdateFooter']);
$router->post('/deleteFooter', ['Middleware'=>'auth' ,'uses'=>'FooterTableController@onDeleteFooter']);
$router->post('/detailsFooter', ['Middleware'=>'auth' ,'uses'=>'FooterTableController@onDetailsFooter']);
// ============  Footer Routing End ==================

// ============  Home Etc Routing Start ==================
$router->get('/allHomeEtc', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onAllSelect']);
$router->post('/CreateHomeEtc', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onCreateHomeEtc']);
$router->post('/updateHomeEtc', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onUpdateHomeEtc']);
$router->post('/deleteHomeEtc', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onDeleteHomeEtc']);
$router->post('/detailsHomeEtc', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onDetailsHomeEtc']);

$router->get('/techDescription', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onSelectTechDescription']);
$router->get('/homeTopTitleSubTitle', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onSelectHomeTopTitleSubTitle']);
$router->get('/totalClientProject', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onSelectTotalClientProject']);
$router->get('/brandImage', ['Middleware'=>'auth' ,'uses'=>'HomeEtcController@onSelectBrandImage']);
// ============  Home Etc Routing End ==================

// ============  Information Routing Start ==================
$router->get('/allInformation', ['Middleware'=>'auth' ,'uses'=>'InformationController@onAllSelect']);
$router->post('/detailsInformation', ['Middleware'=>'auth' ,'uses'=>'InformationController@onDetailsInformation']);
$router->post('/CreateInformation', ['Middleware'=>'auth' ,'uses'=>'InformationController@onCreateInformation']);
$router->post('/updateInformation', ['Middleware'=>'auth' ,'uses'=>'InformationController@onUpdateInformation']);
$router->post('/deleteInformation', ['Middleware'=>'auth' ,'uses'=>'InformationController@onDeleteInformation']);
// ============  Information Routing End ==================

// ============  Project Routing Start ==================
$router->get('/allProject', ['Middleware'=>'auth' ,'uses'=>'ProjectTableController@onAllSelect']);
$router->post('/detailsProject', ['Middleware'=>'auth' ,'uses'=>'ProjectTableController@onDetailsProject']);
$router->post('/CreateProject', ['Middleware'=>'auth' ,'uses'=>'ProjectTableController@onCreateProject']);
$router->post('/updateProject', ['Middleware'=>'auth' ,'uses'=>'ProjectTableController@onUpdateProject']);
$router->post('/deleteProject', ['Middleware'=>'auth' ,'uses'=>'ProjectTableController@onDeleteProject']);
// ============  Project Routing End ==================

// ============  Service Routing Start ==================
$router->get('/allService', ['Middleware'=>'auth' ,'uses'=>'ServicesTableController@onAllSelect']);
$router->post('/detailsService', ['Middleware'=>'auth' ,'uses'=>'ServicesTableController@onDetailsService']);
$router->post('/CreateService', ['Middleware'=>'auth' ,'uses'=>'ServicesTableController@onCreateService']);
$router->post('/updateService', ['Middleware'=>'auth' ,'uses'=>'ServicesTableController@onUpdateService']);
$router->post('/deleteService', ['Middleware'=>'auth' ,'uses'=>'ServicesTableController@onDeleteService']);
// ============  Service Routing End ==================

// ============  Video Routing Start ==================
$router->get('/homeVideo', ['Middleware'=>'auth' ,'uses'=>'VideoController@onSelect']);
// ============  Video Routing End ==================