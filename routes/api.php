<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route Auth
Route::post('user/register', 'API\AuthController@register');
Route::post('user/login', 'API\AuthController@login');

//Route Article
Route::get('article', 'API\ArticleController@index');
Route::post('article/store', 'API\ArticleController@store');
Route::put('article/{id}/update', 'API\ArticleController@updateArticle');
Route::post('article/{id}/update/image', 'API\ArticleController@updateImage');
Route::get('article/{id}/destroy', 'API\ArticleController@delete');
Route::get('article/show', 'API\ArticleController@showArticleUser');
Route::get('article/category/{category_id}', 'API\ArticleController@showArticleCategory');

//Route Category
Route::get('category', 'API\CategoryController@showCategory');

//Route Profile
Route::get('profile', 'API\UserController@profile');
Route::post('profile/update/profile', 'API\UserController@UpdateProfile');

//Route Review
Route::post('review/store', 'API\ReviewController@ReviewStore');
Route::post('review/{id}/update', 'API\ReviewController@ReviewUpdate');
Route::get('review/{id}/destroy', 'API\ReviewController@destroy');
Route::get('review/article/{article_id}', 'API\ReviewController@showReviewArticle');

//Route AnswerComment
Route::post('comment/answer/store', 'API\CommentController@AnswerComment');







//Route::get('comment/show', 'API\CommentController@showComment');

