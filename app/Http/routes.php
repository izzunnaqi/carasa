<?php
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\PageController;
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
Route::get('/', function () {
    return redirect()->intended('/login');
});

Route::get('/login', [
	'as'=>'login',
	'uses'=>'Auth\AuthController@getlogin'
]);

Route::group(['middleware' => 'csrf'], function()
{
 	Route::post('/login', [
	'as'=>'postlogin',
	'uses'=>'Auth\AuthController@postLogin'
	]);
});

Route::get('/logout', [
	'as'=>'logout',
	'uses'=>'Auth\AuthController@getLogout'
]);

Route::group(['middleware' => 'auth'], function()
{
    
    Route::get('/product', [
		'as'=>'product',
		'uses'=>'ProductController@index'
	]);

	Route::get('/product/food', [
		'as'=>'food',
		'uses'=>'ProductController@filterFood'
	]);

	Route::get('/product/drink', [
		'as'=>'drink',
		'uses'=>'ProductController@filterDrink'
	]);

	Route::post('/sortproduct', [
		'as'=>'sortproduct',
		'uses'=>'ProductController@sort'
	]);

	Route::post('/search', [
		'as'=>'search',
		'uses'=>'ProductController@search'
	]);

	Route::group(['middleware' => 'admin'], function()
 	{
 
		Route::get('/dashboard', [
			'as'=>'dashboard',
			'uses'=>'PageController@getDashboard'
		]);

	 	Route::get('/editadmin/{id}', array('as'=>'editadmin',
	 		function($id){
			$num = new PageController();
			return $num->editAdmin($id);
		}));
		
		Route::get('/editkategori/{id}', array('as'=>'editkategori',
	 		function($id){
			$num = new PageController();
			return $num->editKategori($id);
		}));
		
		Route::get('/editproduct/{id}', array('as'=>'editproduct',
	 		function($id){
			$num = new PageController();
			return $num->editProduct($id);
		}));

		Route::get('/edituser/{id}', function($id){
			$num = new PageController();
			return $num->editUser($id);
		});
	 	
	 	Route::group(['middleware' => 'csrf'], function()
	 	{
	 		Route::post('/saveadmin/', [
		 		'as'=>'saveadmin',
		 		'uses'=>'PageController@saveAdmin'
	 		]);

	 		Route::post('/registeradmin/', [
		 		'as'=>'registeradmin',
		 		'uses'=>'PageController@registerAdmin'
	 		]);

	 		Route::post('/searchadmin/', [
		 		'as'=>'searchadmin',
		 		'uses'=>'PageController@personSearch'
	 		]);

	 		Route::post('/saveuser/', [
				'as'=>'saveuser',
				'uses'=>'PageController@saveuser'
			]);

			Route::post('/registeruser/', [
				'as'=>'registeruser',
				'uses'=>'PageController@registeruser'
			]);

	 		Route::post('/searchuser/', [
		 		'as'=>'searchuser',
		 		'uses'=>'PageController@personSearch'
	 		]);

	 		Route::post('/savekategori/', [
	 			'as'=>'saveakategori',
	 			'uses'=>'PageController@saveKategori'
	 		]);

	 		Route::post('/registerkategori/', [
	 			'as'=>'registerkategori',
	 			'uses'=>'PageController@registerKategori'
	 		]);
	 		
	 		Route::post('/searchkategori/', [
	 			'as'=>'searchkategori',
	 			'uses'=>'PageController@searchKategori'
	 		]);
			
			Route::post('/saveproduct/', [
	 			'as'=>'saveproduct',
	 			'uses'=>'PageController@saveProduct'
	 		]);

	 		Route::post('/registerproduct/', [
	 			'as'=>'registerproduct',
	 			'uses'=>'PageController@registerProduct'
	 		]);

	 		Route::post('/searchproduct/', [
	 			'as'=>'searchproduct',
	 			'uses'=>'PageController@searchProduct'
	 		]);
		});
		
		Route::get('/createadmin', [
			'as'=>'createadmin',
			'uses'=>'PageController@createAdmin'
		]);
		
		Route::get('/deleteadmin/{id}', [
			'as'=>'deleteadmin',
			'uses'=>'PageController@deleteAdmin'
		]);

		Route::get('/createkategori', [
			'as'=>'createkategori',
			'uses'=>'PageController@createKategori'
		]);
		
		Route::get('/deletekategori/{id}', [
			'as'=>'deletekategori',
			'uses'=>'PageController@deleteKategori'
		]);
		
		Route::get('/createproduct', [
			'as'=>'createproduct',
			'uses'=>'PageController@createProduct'
		]);
		
		Route::get('/deleteproduct/{id}', [
			'as'=>'deleteproduct',
			'uses'=>'PageController@deleteProduct'
		]);

		Route::get('/dashboarduser', [
			'as'=>'dashboarduser',
			'uses'=>'PageController@getDashboard1'
		]);

		Route::get('/dashboardkategori', [
			'as'=>'dashboardkategori',
			'uses'=>'PageController@getDashboard2'
		]);
		
		Route::get('/dashboardproduct', [
			'as'=>'dashboardproduct',
			'uses'=>'PageController@getDashboard3'
		]);

		
		Route::get('/createuser', [
			'as'=>'createuser',
			'uses'=>'PageController@createuser'
		]);
		
		Route::get('/deleteuser/{id}', [
			'as'=>'deleteuser',
			'uses'=>'PageController@deleteuser'
		]);
	});
});

Route::get('password/email', 
[
	'as'=>'getemail',
	'uses'=>'Auth\PasswordController@getEmail'
]);

Route::post('password/email', 
[
	'as'=>'postemail',
	'uses'=>'Auth\PasswordController@postEmail'
]);

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

/*
 |-------------------------------------------------------------------------
 | API Routes
 |--------------------------------------------------------------------------
 | Routes that integrated with API, for testing the web.
 | /login -> for login testing. returns username and hashed password of authenticated admin
 | /searchadmin -> for admin searching purposes. returns admin with submitted keyword's username, name, and email.
 | /retrieveadmin -> retrieve all admins in the database. returns their email, username, and name.
 | /editadmin -> edit a designated admin. you can edit ther names, emails, usernames, passwords,  addresses, and mobile phone numbers
 | /deleteadmin -> delete an admin with a certain username
 */
 
 Route::post ('apicarasa/login/', 'ApiController@login');
 
 Route::get('apicarasa/product', 
 [
 		'as'=>'apiretrieveproduct',
 		'uses'=>'ApiController@retrieveProduct'
 ]);

 Route::group(['middleware' => 'apiauth'], function()
 {
 	Route::get('apicarasa/product', 
 	[
 		'as'=>'apiretrieveproduct',
 		'uses'=>'ApiController@retrieveProduct'
 	]);

 	Route::get('apicarasa/retrieveadmin', 
 	[
 		'as'=>'apiretrieveadmin',
 		'uses'=>'ApiController@retrieveAdmin'
 	]);

 	Route::post('apicarasa/searchadmin/', 
 	[
 		'as'=>'apisearchadmin',
 		'uses'=>'ApiController@searchAdmin'
 	]);

 	Route::put('apicarasa/editadmin/', 
 	[
 		'as'=>'apieditadmin',
 		'uses'=>'ApiController@editAdmin'
 	]);

 	Route::post('apicarasa/createadmin/', 
 	[
		'as'=>'apicreateadmin',
 		'uses'=>'ApiController@registerAdmin'
 	]);

 	Route::delete('apicarasa/deleteadmin/', 
 	[
 		'as'=>'apideleteadmin',
		'uses'=>'ApiController@eraseAdmin'
 	]);
 });