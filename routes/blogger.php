<?php
Route::group(['prefix' => '/blogger', 'namespace' => 'Blogger', 'as' => 'blogger.', 'middleware' => ['blogger', 'auth']], function () {

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::resources([

        'blogs' => 'BlogController',
    ]);
});
