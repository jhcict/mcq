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

Route::controller('/', 'HomeController');
Route::resource('paper', 'PaperController');
Route::resource('questions', 'QuestionController');
Route::resource('answer', 'AnswerController');
Route::resource('discussion', 'DiscussionControoler');
Route::resource('discussionpost', 'DiscussionPostController');


Route::group(
    [
    'prefix'=> 'admin',
    'namespace'=>'Admin',
    'middleware'=>'admin'],
    function () {
        Route::resource('users', 'UserController');
        Route::resource('roles', 'RoleController');
        Route::resource('category', 'CategoryController');
        Route::resource('subjects', 'SubjectController');
        Route::resource('papers', 'PaperController');
        Route::resource('questions', 'QuestionController');
        Route::resource('answer', 'AnswerController');
    }
);
