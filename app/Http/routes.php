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



Route::group(
    [
    'prefix'=> 'admin',
    'namespace'=>'Admin',
    'middleware'=>\App\Http\Middleware\Admin::class ],
    function () {
        Route::resource('user', 'UserController');
        Route::resource('role', 'RoleController');
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
Route::controller('/','HomeController');


Route::resource('paper', 'PaperController');
Route::resource('questions', 'QuestionController');
Route::resource('answer', 'AnswerController');
Route::resource('discussion', 'DiscussionControoler');
Route::resource('discussionpost', 'DiscussionPostController');
