<?php
/**
 * Routes File
 *
 * PHP Version 5
 *
 * @category Routing
 * @package  LearnMCQ
 * @author   Gnanakeethan Balasubramaniam <gnana@keethan.me>
 * @license  MIT https://license.mit.edu
 * @link     https://mcq.learntechnologies.org/
 */


//The Authenticate middleware must be used before Admin Middleware
Route::group(
    [
    'prefix'=> '/admin',
    'namespace'=>'Admin',
    'middleware'=>[
        \App\Http\Middleware\Authenticate::class,
        \App\Http\Middleware\Admin::class,
        ]
    ],
    function() {
        Route::resource('user', 'UserController');
        Route::get('user/ban/{id}','UserController@getBan');
        Route::get('user/unban/{id}','UserController@getUnban');
        Route::resource('category', 'CategoryController');
        Route::resource('subject', 'SubjectController');
        Route::resource('paper', 'PaperController');
        Route::resource('question', 'QuestionController');
        Route::resource('answer', 'AnswerController');
        Route::controller('/', 'DashboardController');
    }
);



Route::controller('auth', 'Auth\AuthController');
Route::controller('password', 'Auth\PasswordController');


Route::group(
    [
    'middleware'=>[
        \App\Http\Middleware\Authenticate::class,
        \App\Http\Middleware\Moderator::class,
        ]
    ],
    function() {
        Route::resource('paper', 'PaperController');
        Route::resource('questions', 'QuestionController');
        Route::resource('answer', 'AnswerController');
    }
);


Route::resource('discussion', 'DiscussionController');
Route::resource('discussionpost', 'DiscussionPostController');





Route::controller('/', 'HomeController', [ 'getIndex'=>'index' ]);
