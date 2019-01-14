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

/*
 * Examples from Lesson 21:
 *
 * // Add classes as on-demand elements within a service container:
 * app()->bind('example', function() {
 *     return new \App\Example();
 * });
 *
 * // Create a singleton instance of a service within the container:
 * app()->singleton('example', function() {
 *      return new \App\Example();
 * });
 *
 * Engineers can get elements from the container using:
 * $filesystem = app('Illuminate\Filesystem\Filesystem');
 */

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

// Projects
/*
 * GET /projects (index)
 * GET /projects/create (create)
 * GET /projects/1 (show)
 * POST /projects (store)
 * GET /projects/1/edit (edit)
 * PATCH /projects/1 (update)
 * DELETE /projects/1 (destroy)
 */

Route::resource('projects', 'ProjectsController');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
