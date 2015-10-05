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

Route::get('/', function () {
    return view('welcome');
});	

Route::get('/addMarks', function () {
    return view('pages.addScore');
});


Route::get('/landing', function () {
    return view('pages.sample');
});

Route::get('/index', function () {
    return view('pages.index');
});

Route::get('ecodryer', function () {
    return view('pages.site.main');
});

Route::get('auth/login', ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as'=>'logout', 'uses'=>'Auth\AuthController@getLogout']);

Route::get('auth/register', ['as'=>'register', 'uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([
   'password' => 'Auth\PasswordController',
]);

//Score Routes
Route::get('/addScore', ['as'=>'addScore', 'uses'=>'MyController@store']);
Route::post('/addScore', 'MyController@store');
// Route::get('/deleteScore/{id}',['as'=>'deleteScore', 'uses'=>'MyController@destroy']);
// Route::resource('scores','MyController');
// Route::get('/addScore', function () {
//     return view('pages.addScore');
// });	
//Route::get('/displayScores', ['as'=>'display','uses'=>'SubjectController@index']);
// Route::get('/displayScores', function () {
//     return view('pages.displayScores');
// });
// Route::get('/editScore', function () {
//     return view('pages.editScore');
// });
//end of Score routes

//Subject Routes
Route::get('/addSubject', ['as'=>'addSubject', 'uses'=>'SubjectController@store']);
Route::post('/addSubject', 'SubjectController@store');
Route::get('/deleteSubject/{id}',['as'=>'deleteSubject', 'uses'=>'SubjectController@destroy']);
Route::resource('subjects','SubjectController');
Route::get('/addSubjects', function () {
    return view('pages.addSubject');
});	
Route::get('/display', function () {
    return view('pages.add');
});
Route::get('/display', ['as'=>'display','uses'=>'SubjectController@index']);
Route::get('/editSubject', function () {
    return view('pages.editSubject');
});
//end of Subject routes

//Student Routes
Route::get('/addStudent', ['as'=>'addStudent', 'uses'=>'StudentController@store']);
Route::post('/addStudent', 'StudentController@store');
Route::get('/deleteStudent/{id}',['as'=>'deleteStudent', 'uses'=>'StudentController@destroy']);
Route::resource('students','StudentController');
Route::get('/addStudent', function () {
    return view('pages.addStudent');
});  
Route::get('/displayStudents', function () {
    return view('pages.displayStudents');
});
Route::get('/displayStudents', ['as'=>'displayStudents','uses'=>'StudentController@index']);

Route::get('/editStudent', function () {
    return view('pages.editStudent');
});
//end of Student routes

?>