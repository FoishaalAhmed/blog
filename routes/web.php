<?php


Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    /** profile route start **/
    Route::get('/profile', 'ProfileController@index')->name('profile');
    Route::post('/profile', 'ProfileController@photo')->name('profile');
    Route::post('/password', 'ProfileController@password')->name('password.change');
    Route::post('/profile-update', 'ProfileController@update')->name('profile.update');
    /** profile route end **/
});

Auth::routes();

/** Front End Route Starts **/

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/blogs/{category_id}/{category_name}', 'BlogController@blogs')->name('blogs');
    Route::get('/blog/{slug}', 'BlogController@blog')->name('blog');
    Route::get('/faqs', 'BlogController@faq')->name('faqs');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::post('/send-query', 'ContactController@query')->name('send.query');
    Route::get('/support', 'SupporterController@index')->name('support');
    Route::post('/send-support', 'SupporterController@support')->name('send.support');

});

/** Front End Route Ends **/
