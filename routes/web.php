<?php

use Illuminate\Support\Facades\Route;




Route::get('/','HomeController@index')->name('home');

Route::get('/newsList','postController@show')->name('newsList');

Route::get('/news/{id}','postController@news')->name('news');

route::get('/ticket','ticketController@show')->name('ticket');

route::get('/ticket/{value}/{id}','ticketController@BuyXTicket')->name('buyTicket');



Route::group(['prefix'=>'/','middleware'=>'CheckLogin'],function () {
    Route::get('/ajax_get_hafte/','GameController@ajax_get_hafte')->name('plan');

    Route::get('/plan','GameController@plan')->name('plan');
    Route::get('/account/cellTicket','accountController@index')->name('cellTicket');
    Route::get('/lottery','loteryController@lottery')->name('lottery');
    Route::get('/manageLiga','GameController@Mliga')->name('manageLiga');
    Route::get('profile/{id}','ProfileController@show')->name('profile');
    Route::post('profile/{id}','ProfileController@update')->name('UpdateProfile');
    Route::get('/resultRegister/{id}','GameController@resultRegister')->name('resultRegister');
    Route::post('/StoreResult/{id}','GameController@StoreResult')->name('StoreResult');
    Route::get('/week','loteryController@all')->name('week');
    Route::get('/accept/{id}','GameController@accept')->name('accept');
    Route::get('/etraz/{id}','GameController@etraz')->name('etraz');


    route::group(['prefix'=>'/Game'],function (){

        Route::get('/{id}','GameController@show')->name('GameList');

        Route::get('/name','GameController@index')->name('GameName');

        Route::get('/Grouping/{id}/{userId}','GameController@grouping')->name('Grouping');

        Route::get('/activeGame/{id}','GameController@activeGame')->name('activeGame');

///{userId}/{rivalId}

    });
});



Route::group(['prefix'=>'dashboard','middleware'=>'CheckAdmin'],function (){

    Route::get('/user','ProfileController@users')->name('user');

    Route::get('/','DashboardController@index')->name('dashboard');

    Route::get('/manage','IndexMangement@show')->name('indexMange');

    Route::get('/selectPage','IndexMangement@select')->name('selectPage');

    Route::post('/store','IndexMangement@store')->name('storeIndex');

    route::group(['prefix'=>'/events'],function (){

        Route::group(['prefix'=>'EventCategory'],function () {

            Route::get('/create', 'EventCategoryController@create')->name('CreateECategory');

            Route::post('/store', 'EventCategoryController@store')->name('StoreECategory');

            Route::get('/index', 'EventCategoryController@index')->name('CategoryEList');

            Route::delete('/delete/{id}', 'EventCategoryController@delete')->name('DeleteECategory');

            Route::get('/edit/{id}', 'EventCategoryController@edit')->name('EditECategory');

            Route::post('/update/{id}', 'EventCategoryController@update')->name('UpdateECategory');
        });

        Route::get('/create','GameController@create')->name('createEvent');

        Route::post('/store','GameController@store')->name('storeEvent');

        Route::get('/index','GameController@adminIndex')->name('eventList');

        Route::delete('/delete/{id}', 'GameController@delete')->name('DeleteEvent');

        Route::get('/edit/{id}', 'GameController@edit')->name('EditEvent');

        Route::post('/update/{id}', 'GameController@update')->name('UpdateEvent');

    });

    route::group(['prefix'=>'ticket'],function (){

        Route::get('/create', 'TicketController@create')->name('CreateTicket');

        Route::post('/store', 'TicketController@store')->name('StoreTicket');


        Route::get('/index', 'TicketController@index')->name('TicketList');

        Route::delete('/delete/{id}', 'TicketController@delete')->name('DeleteTicket');

        Route::get('/edit/{id}', 'TicketController@edit')->name('EditTicket');

        Route::post('/update/{id}', 'TicketController@update')->name('UpdateTicket');

    });

    Route::group(['prefix'=>'category'],function () {

        Route::get('/create', 'CategoryController@create')->name('CreateCategory');

        Route::post('/store', 'CategoryController@store')->name('StoreCategory');

        Route::get('/index', 'CategoryController@index')->name('CategoryList');

        Route::delete('/delete/{id}', 'CategoryController@delete')->name('DeleteCategory');

        Route::get('/edit/{id}', 'CategoryController@edit')->name('EditCategory');

        Route::post('/update/{id}', 'CategoryController@update')->name('UpdateCategory');
    });

    Route::group(['prefix'=>'post'],function () {

        Route::get('/create', 'postController@create')->name('Createpost');

        Route::post('/store', 'postController@store')->name('Storepost');

        Route::get('/index', 'postController@index')->name('postList');

        Route::delete('/delete/{id}', 'postController@delete')->name('postDelete');

        Route::get('/edit/{id}', 'postController@edit')->name('Editpost');

        Route::post('/update/{id}', 'postController@update')->name('postUpdate');
    });
});

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();


Route::get('list','DatatablesController@index');


Route::get('add-todo','DatatablesController@create');
Route::post('post-todo','DatatablesController@store');


Route::get('edit-todo/{id?}','DatatablesController@edit');
Route::post('update-todo','DatatablesController@update');


Route::get('delete-todo/{id?}','DatatablesController@delete');
