<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Language
Route::get('/admin-panel/lang/{locale}','Admin\HomeController@setLang')->name('site_lang');
Route::group(['prefix' => 'admin-panel'], function () {
    Route::group(['namespace' => 'Admin'], function () {


        // Home
        Route::get('/', 'HomeController@getIndex')->name('admin.home');
        Route::post('/social-links', 'HomeController@addSocialLinks')->name('social_links');
        Route::post('/slider-image', 'HomeController@addSlider')->name('add_slider');
        Route::post('/update-slider', 'HomeController@updateSlider')->name('update_slider');
        Route::post('/delete-slider', 'HomeController@deleteSlider')->name('delete_slider');
        Route::post('/update-about', 'HomeController@updateAbout')->name('update_home_about');
        Route::post('/client-image', 'HomeController@addClientImage')->name('upload_client_image');
        Route::post('/update-client-image', 'HomeController@updateSlider')->name('update_client_image');
        Route::post('/update-client-image', 'HomeController@updateClientImage')->name('update_client_image');
        Route::post('/delete-client-image', 'HomeController@deleteClientImage')->name('delete_client_image');
        Route::get('/send-mail', 'HomeController@sendMail')->name('send_mail');
        Route::post('/delete-subscriber', 'HomeController@deleteSubscriber')->name('delete_subscriber');
        Route::post('/delete-selected', 'HomeController@deleteSelected')->name('delete_selected');
        Route::post('/sendMail/{id}', 'HomeController@returnMailBlade')->name('send_reply_to_subscriber');

        // Settings
        Route::get('/settings', 'SettingsController@getIndex')->name('admin.settings');
        Route::post('update-settings', 'SettingsController@updateSettings')->name('settings.update');

        // About
        Route::get('/about', 'AboutController@getIndex')->name('about');
        Route::post('/about', 'AboutController@updateAbout')->name('update_about');

        // Service
        Route::get('/service', 'ServiceController@getIndex')->name('service');
        Route::post('/services', 'ServiceController@updateMission')->name('update_service_mission');
        Route::post('/service', 'ServiceController@addService')->name('add_service');
        Route::post('/serviceUpdate', 'ServiceController@updateOneService')->name('update_one_service');
        Route::post('/serviceDelete', 'ServiceController@deleteOneService')->name('delete_one_service');

        // Yacht Page
        Route::get('/yacht', 'YachtController@getIndex')->name('yacht');

        // Gallery Page
        Route::get('/gallery','GalleryController@getIndex')->name('gallery');
        Route::post('/galleryAdd', 'GalleryController@addGallery')->name('gallery_add');
        Route::post('/galleryUpdate', 'GalleryController@updateGallery')->name('update_gallery');
        Route::post('/GalleryDelete', 'GalleryController@galleryDelete')->name('delete_gallery');

        //Faq Page
        Route::get('/faq', 'FaqController@getIndex')->name('faq');
        Route::post('/faqAdd', 'FaqController@addQuestion')->name('add_question');
        Route::post('/faqUpdate', 'FaqController@updateQuestion')->name('update_question');
        Route::post('/faqDelete', 'FaqController@deleteQuestion')->name('delete_question');

        // Contact Page
        Route::get('/contacta', 'ContactController@getIndex')->name('contact');
        Route::post('/updateContact', 'ContactController@updateContact')->name('update_contact_info');
        Route::get('delete-message/{id}', 'ContactController@deleteMessage')->name('delete_message');
        Route::get('reply-message/{id}', 'ContactController@reply')->name('reply');
        Route::post('send-reply', 'ContactController@sendReply')->name('send_reply');

        // Users Page
        Route::get('/users', 'UsersController@getIndex')->name('users');
        Route::post('/add-user', 'UsersController@addUser')->name('add_user');
        Route::post('/update-user', 'UsersController@updateUser')->name('update_user');
        Route::post('/delete-user', 'UsersController@deleteUser')->name('delete_user');

    });
});

Route::group(['namespace' => 'Site'], function (){
    Route::get('/', 'HomeController@getIndex')->name('site_home');

    Route::post('/subscribe', 'HomeController@subscribe')->name('subscriber_email');

    Route::get('/about', 'AboutController@returnAbout')->name('site_about');

    Route::get('/services', 'ServiceController@returnService')->name('site_services');

    Route::get('/yacht', 'YachtController@returnYacht')->name('site_yacht');

    Route::get('/gallery', 'GalleryController@returnGallery')->name('site_gallery');

    Route::get('/faqs', 'FaqController@returnFaq')->name('site_faq');

    Route::get('/contact', 'ContactController@returnContact')->name('site_contact');
    Route::post('/callUs', 'ContactController@sendMessage')->name('call_us');
});