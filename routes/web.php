<?php
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',['uses'=>'Homecontroller\homecontroller@index','as'=>'/']);
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/admindashbor',['uses'=>'Admin\DashboardController@index','as'=>'admin_admindashbor','middleware'=>['admin','auth']]);
Route::get('author/authordashbor',['uses'=>'Author\DashboardController@index','as'=>'author_authordashbor','middleware'=>['author','auth']]);

// Back End Route

// slider image route start
Route::get('admin/slider',['uses'=>'SliderController\HomeController@index','as'=>'slider_image']);
Route::post('admin/slider/save',['uses'=>'SliderController\HomeController@imagestore','as'=>'send_slider']);
Route::get('admin/show/all/slider_image',['uses'=>'SliderController\HomeController@showall','as'=>'show_all_slider_image']);
Route::get('admin/publiation/status/{id}',['uses'=>'SliderController\HomeController@publication','as'=>'publication_update']);
Route::get('admin/edite/slider/{id}',['uses'=>'SliderController\HomeController@editesliderimage','as'=>'edite_slider_image']);
Route::post('admin/slider/image/update/{id}',['uses'=>'SliderController\HomeController@updatesliderimage','as'=>'slider_image_update']);
Route::get('admin/slider/image/delete/{id}',['uses'=>'SliderController\HomeController@deletesliderimage','as'=>'slider_image_delete']);
// slider image route End
// Nav route start
Route::get('admin/nav/controller',['uses'=>'NavController\Homercontroller@index','as'=>'manage_nav']);
Route::post('admin/menu/add',['uses'=>'NavController\Homercontroller@menustore','as'=>'menu_post']);
Route::get('admin/show/all/menue',['uses'=>'NavController\Homercontroller@showallmenue','as'=>'showallmenueurl']);
Route::get('admin/menu/publication/update/{id}',['uses'=>'NavController\Homercontroller@publicationupdate','as'=>'menu_publication_update']);
Route::get('admin/menu/update/form/show/{id}',['uses'=>'NavController\Homercontroller@editemenushow','as'=>'edite_menu_show_form']);
Route::post('admin/update/menu/save/{id}',['uses'=>'NavController\Homercontroller@upagemenu','as'=>'update_menu']);
Route::get('admin/menu/delete/{id}',['uses'=>'NavController\Homercontroller@deletemenu','as'=>'delete_menu']);
// Sub Nav Route Start
Route::get('admin/sub-menu/',['uses'=>'Subnav\SubnavController@index','as'=>'sub_nav']);
Route::post('admin/sub-menu/store',['uses'=>'Subnav\SubnavController@store','as'=>'sub_menu_fomr_store']);
Route::get('admin/get/all/sub-menu',['uses'=>'Subnav\SubnavController@showall','as'=>'show_all_sub_menu']);
Route::get('admin/show/single/sub-menu/{id}',['uses'=>'Subnav\SubnavController@edite','as'=>'show_single_subminue']);
Route::post('admin/sub/menu/update/{id}',['uses'=>'Subnav\SubnavController@editesubmenu','as'=>'edite_sub_menu_update']);
Route::get('admin/sub/menue/delete/{id}',['uses'=>'Subnav\SubnavController@deletesubmenu','as'=>'delete_sub_menue']);
// Socal link
Route::get('admin/socal/link',['uses'=>'SocalLinkController\SocalController@index','as'=>'socal_link']);
Route::post('admin/socal/link/post',['uses'=>'SocalLinkController\SocalController@store','as'=>'socal_link_store']);
Route::get('admin/show/socal/link/all',['uses'=>'SocalLinkController\SocalController@showall','as'=>'show_all_socal_link']);
Route::get('admin/single/link/show/{id}',['uses'=>'SocalLinkController\SocalController@edite','as'=>'show_single_link' ]);
Route::post('admin/single/update-link/{id}',['uses'=>'SocalLinkController\SocalController@update','as'=>'save_single_socal_link']);
// Admin panel Blood Donation post Route
Route::get('admin/blood-donation/',['uses'=>'bloodDonation\BloodDonationController@index','as'=>'blood_donation']);
Route::post('admin/blood-donation/save-info',['uses'=>'bloodDonation\BloodDonationController@store','as'=>'blood_donation_info']);
Route::get('admin/show/all/blood/donation',['uses'=>'bloodDonation\BloodDonationController@showall','as'=>'showall_blood_donation']);
Route::get('admin/show/publication/updata/{id}',['uses'=>'bloodDonation\BloodDonationController@updatepublication','as'=>'publication_update_blood']);
Route::get('admin/show/single/blood/item/{id}',['uses'=>'bloodDonation\BloodDonationController@showsingleblood','as'=>'show_single_id']);
Route::post('admin/update/info/in-blood-donation/{id}',['uses'=>'bloodDonation\BloodDonationController@updateblood','as'=>'update_info_blood']);
Route::get('admin/delete/information/blood/{id}',['uses'=>'bloodDonation\BloodDonationController@deleteblood','as'=>'delete_info_blood']);
// Frontend route
Route::get('show/single/menu/{id}',['uses'=>'FrontEnd\FrontEndController@show','as'=>'show_singel_menu']);