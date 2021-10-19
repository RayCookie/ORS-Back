<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Unauthenticated group
Route::group(array('before' => 'guest'), function() {

	// CSRF protection
	Route::group(array('before' => 'csrf'), function() {

		// Create an account (POST)
		Route::post('/create', array(
			'as' => 'account-create-post',
			'uses' => 'AccountController@postCreate'
		));

		// Sign in (POST)
		Route::post('/sign-in', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));

		// Sign in (POST)
		Route::post('/student-registration', array(
			'as' => 'student-registration-post',
			'uses' => 'StudentController@postRegistration'
		));

	});

	// Sign in (GET)
	Route::get('/admin', array(
		'as' 	=> 'account-sign-in',
		'uses'	=> 'AccountController@getSignIn'
	));

	// Create an account (GET)
	Route::get('/create', array(
		'as' 	=> 'account-create',
		'uses' 	=> 'AccountController@getCreate'
	));

	// Student Registeration form
	Route::get('/student-registration', array(
		'as' 	=> 'student-registration',
		'uses' 	=> 'StudentController@getRegistration'
	));

    // Render search books panel
    Route::get('/book', array(
        'as' => 'search-book',
        'uses' => 'BooksController@searchBook'
    ));

    Route::get('/nav', function () {
        return view('nav');
    });


    //guest biblio
    Route::get('/biblio', array(
        'as' => 'biblio',
        'uses' => 'BooksController@guestIndex'
	));

    Route::get('/contactus', function () {
        return view('guest.Contactus');
    });
    Route::get('/contactus2', function () {
        return view('guest.Contactus2');
    });
    Route::get('/checkout', function () {
        return view('guest.Checkout');
    });
    Route::get('/aboutus', function () {
        return view('guest.AboutUs');
    });
    Route::get('/', function () {
        return view('Acceuil');
    });

    Route::get('/events', function () {
        return view('guest.events');
    });


    Route::get('/blog', array(
        'as' => 'blog',
        'uses' => 'PostController@index'
	));

    Route::get('/evenement', array(
        'as' => 'evenement',
        'uses' => 'EventController@index'
	));

    Route::get('/connexion', function () {
        return view('Login');
    });

});

// Main books Controlller left public so that it could be used without logging in too
Route::resource('/books', 'BooksController');

// Authenticated group
// Route::group(array('before' => 'auth'), function() {
Route::group(['middleware' => ['auth']] , function() {

	// Home Page of Control Panel
	Route::get('/home',array(
		'as' 	=> 'home',
		'uses'	=> 'HomeController@home'
	));

	// Render Add Books panel
    Route::get('/add-books', array(
        'as' => 'add-books',
        'uses' => 'BooksController@renderAddBooks'
	));

	Route::get('/add-book-category', array(
        'as' => 'add-book-category',
        'uses' => 'BooksController@renderAddBookCategory'
	));

	Route::post('/bookcategory', 'BooksController@BookCategoryStore')->name('bookcategory.store');


	// Render All Books panel
    Route::get('/all-books', array(
        'as' => 'all-books',
        'uses' => 'BooksController@renderAllBooks'
	));

	Route::get('/bookBycategory/{cat_id}', array(
        'as' => 'bookBycategory',
        'uses' => 'BooksController@BookByCategory'
    ));

	// Students
    Route::get('/registered-students', array(
        'as' => 'registered-students',
        'uses' => 'StudentController@renderStudents'
    ));

    // Render students approval panel
    Route::get('/students-for-approval', array(
        'as' => 'students-for-approval',
        'uses' => 'StudentController@renderApprovalStudents'
	));

	  // Render students approval panel
	  Route::get('/settings', array(
        'as' => 'settings',
        'uses' => 'StudentController@Setting'
	));

	  // Render students approval panel
	  Route::post('/setting', array(
        'as' => 'settings.store',
        'uses' => 'StudentController@StoreSetting'
    ));

    // Main students Controlller resource
	Route::resource('/student', 'StudentController');

	Route::post('/studentByattribute', array(
        'as' => 'studentByattribute',
        'uses' => 'StudentController@StudentByAttribute'
    ));

    // Issue Logs
    Route::get('/issue-return', array(
        'as' => 'issue-return',
        'uses' => 'LogController@renderIssueReturn'
    ));

    // Render logs panel
    Route::get('/currently-issued', array(
        'as' => 'currently-issued',
        'uses' => 'LogController@renderLogs'
    ));

    // Main Logs Controlller resource
    Route::resource('/issue-log', 'LogController');

	// Sign out (GET)
    Route::get('/sign-out', array(
    	'as' => 'account-sign-out',
		'uses' => 'AccountController@getSignOut'
    ));

    //blog routes
    Route::get('/posts', 'PostController@index')->name('all_posts');
    Route::get('/post/create', 'PostController@create')->name('create_post');
    Route::post('/post/store', 'PostController@store')->name('store_new_post');
    Route::get('/post/edit/{post_id}', 'PostController@edit')->name('edit_post');
    Route::post('/post/update/{post_id}', 'PostController@update')->name('update_post');
    Route::delete('/post/delete/{post_id}', 'PostController@destroy')->name('destroy_post');

    //event routes
    Route::get('/events', 'EventController@index')->name('all_events');
    Route::get('/event/create', 'EventController@create')->name('create_event');
    Route::post('/event/store', 'EventController@store')->name('store_new_event');
    Route::get('/event/edit/{event_id}', 'EventController@edit')->name('edit_event');
    Route::post('/event/update/{event_id}', 'EventController@update')->name('update_event');
    Route::delete('/event/delete/{event_id}', 'EventController@destroy')->name('destroy_event');

    //image gaSllery routes
    Route::get('image-gallery', 'ImageGalleryController@index')->name('image');
    Route::post('image-gallery', 'ImageGalleryController@upload');
    Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');


});
