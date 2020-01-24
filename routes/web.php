<?php

Route::group(['middleware' => 'web'], function () {

    Auth::routes();

    Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'role:superadmin']], function () {

        Route::get('', 'AdminController@index');

        Route::group(['prefix' => 'profile'], function () {
            Route::get('', 'ProfileController@index');
            Route::post('update/', 'ProfileController@profileUpdate');
            Route::get('change-password', 'ProfileController@changePassword');
            Route::post('update-password/', 'ProfileController@updatePassword');
        });

        Route::group(['prefix' => 'param'], function () {
            Route::post('add-param', 'AdminController@addParam');
        });
        Route::post('removeArrJson', 'AdminController@removeArrJson');

        Route::group(['prefix' => 'config'], function () {
            Route::get('', 'ConfigController@edit');
            Route::post('update', 'ConfigController@update');
        });

        Route::group(['prefix' => 'seo'], function () {
            Route::get('', 'SeoController@index');
            Route::get('add', 'SeoController@add');
            Route::get('edit/{id}', 'SeoController@edit');
            Route::post('insert/{id?}', 'SeoController@insert');
            Route::get('remove/{id}', 'SeoController@remove');
        });

        // --> filemanager
        Route::group(['prefix' => 'admin'], function () {
            Route::post('filemanager', 'AdminController@filemanager');
            Route::post('filemanager_crop', 'AdminController@filemanager_crop');
            Route::post('filemanager_resize', 'AdminController@filemanager_resize');
            Route::post('filemanager_namealt', 'AdminController@filemanager_namealt');
            Route::post('filemanager_del', 'AdminController@filemanager_del');
            Route::post('filemanager_replace', 'AdminController@filemanager_replace');
            Route::post('filemanager_search', 'AdminController@filemanager_search');
            Route::post('filemanager_paginator', 'AdminController@filemanager_paginator');
            Route::match(['get', 'post'], 'filemanager_load', 'AdminController@filemanager_load');
        });

        Route::group(['prefix' => 'language'], function () {
            Route::get('', 'LangController@index');
            Route::get('add', 'LangController@add');
            Route::get('edit/{id}', 'LangController@edit');
            Route::post('insert/{id?}', 'LangController@insert');
            Route::get('remove/{id}', 'LangController@remove');
            Route::post('change-position', 'LangController@changePosition');
            Route::post('remove-image', 'LangController@removeImage');
            Route::post('enable', 'LangController@enable');
            Route::post('default_lang', 'LangController@default_lang');
        });

        Route::group(['prefix' => 'language_interface'], function () {
            Route::get('', 'LangInterfaceController@index');
            if(config('myconfig.language_developer')) {
                Route::get('add', 'LangInterfaceController@add');
            }
            Route::get('edit/{id}', 'LangInterfaceController@edit');
            Route::post('insert/{id?}', 'LangInterfaceController@insert');
            if(config('myconfig.language_developer')) {
                Route::get('remove/{id}', 'LangInterfaceController@remove');
            }
            Route::post('change-position', 'LangInterfaceController@changePosition');
        });

        Route::post('filemanager_imageUpload', 'AdminController@filemanager_imageUpload');

        Route::group(['prefix' => 'access', 'middleware' => ['role:superadmin']], function () {
            Route::get('', 'AccessController@index');

            Route::group(['prefix' => 'users'], function () {
                Route::get('add', 'AccessController@addUser');
                Route::post('create', 'AccessController@createUser');
                Route::get('edit/{id}', 'AccessController@editUser');
                Route::post('update/{id}', 'AccessController@updateUser');
                Route::get('remove/{id}', 'AccessController@removeUser');
            });

            Route::group(['prefix' => 'roles'], function () {
                Route::get('add', 'AccessController@addRole');
                Route::post('create', 'AccessController@createRole');
                Route::get('edit/{id}', 'AccessController@editRole');
                Route::post('update/{id}', 'AccessController@updateRole');
                Route::get('remove/{id}', 'AccessController@removeRole');
            });

            Route::group(['prefix' => 'permissions'], function () {
                Route::get('add', 'AccessController@addPermission');
                Route::post('create', 'AccessController@createPermission');
                Route::get('edit/{id}', 'AccessController@editPermission');
                Route::post('update/{id}', 'AccessController@updatePermission');
                Route::get('remove/{id}', 'AccessController@removePermission');
            });
        });

        /*
       |--------------------------------------------------------------------------
       | WebSite
       |--------------------------------------------------------------------------
       */

        Route::group(['prefix' => 'services'], function () {
            Route::get('', 'ServicesController@index');
            Route::get('add', 'ServicesController@add');
            Route::get('edit/{id}', 'ServicesController@edit');
            Route::get('remove/{id}', 'ServicesController@remove');
            Route::post('insert/{id?}', 'ServicesController@insert');
            Route::post('change-position', 'ServicesController@changePosition');
            Route::post('enable', 'ServicesController@enable');
        });

        Route::group(['prefix' => 'articles'], function () {
            Route::get('', 'ArticleController@index');
            Route::get('add', 'ArticleController@add');
            Route::get('edit/{id}', 'ArticleController@edit');
            Route::get('remove/{id}', 'ArticleController@remove');
            Route::post('insert/{id?}', 'ArticleController@insert');
            Route::post('enable', 'ArticleController@enable');
        });

        Route::group(['prefix' => 'gallery'], function () {
            Route::get('', 'GalleryController@index');
            Route::get('add', 'GalleryController@add');
            Route::get('edit/{id}', 'GalleryController@edit');
            Route::get('remove/{id}', 'GalleryController@remove');
            Route::post('insert/{id?}', 'GalleryController@insert');
            Route::post('change-position', 'GalleryController@changePosition');
            Route::post('enable', 'GalleryController@enable');
        });

        Route::group(['prefix' => 'foto'], function () {
            Route::get('', 'FotoController@index');
            Route::get('add', 'FotoController@add');
            Route::get('edit/{id}', 'FotoController@edit');
            Route::get('remove/{id}', 'FotoController@remove');
            Route::post('insert/{id?}', 'FotoController@insert');
            Route::post('change-position', 'FotoController@changePosition');
            Route::post('enable', 'FotoController@enable');
        });

        Route::group(['prefix' => 'contacts'], function () {
            Route::get('', 'ContactsController@index');
            Route::post('insert/{id}', 'ContactsController@insert');
        });

        Route::group(['prefix' => 'requests'], function () {
            Route::get('', 'ClientRequestController@index');
            Route::get('edit/{id}', 'ClientRequestController@edit');
            Route::post('insert/{id?}', 'ClientRequestController@insert');
            Route::get('remove/{id}', 'ClientRequestController@remove');
            Route::post('enable', 'ClientRequestController@enable');
        });
    });

    Route::post('subscribe', 'MainController@subscribe');
    Route::get('un-subscribe', 'MainController@unSubscribe');
    Route::post('un-subscribing', 'MainController@unSubscribing');
    Route::post('file-uploads', 'MainController@fileUploads');
    Route::post('request', 'MainController@request');


    // Sitemap
    Route::get('sitemap.xml', 'MainController@sitemap');
    Route::get('sitemap-main.xml', 'MainController@sitemap_main');
    Route::get('sitemap-category.xml', 'MainController@sitemap_category');
    Route::get('sitemap-items.xml', 'MainController@sitemap_items');

    // website
    Route::get('', 'MainController@index');
    Route::get('services', 'MainController@services');
    Route::get('articles/{url?}', 'MainController@articles');
    Route::get('foto-gallary', 'MainController@foto_gallary');
    Route::post('requests-k', 'MainController@requests_k');
});