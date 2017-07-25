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

/**
 * Dashboard Specifics Routes
**/

Route::get( '/dashboard', 'DashboardController@index' )->name( 'dashboard.index' );
Route::get( '/dashboard/modules', 'DashboardController@modules' )->name( 'dashboard.modules' );
Route::get( '/dashboard/settings', 'DashboardController@settings' )->name( 'dashboard.settings' );
Route::get( '/dashboard/users', 'DashboardController@users' )->name( 'dashboard.users' );
Route::get( '/dashboard/about', 'DashboardController@about' )->name( 'dashboard.about' );
Route::get( '/dashboard/update', 'DashboardController@update' )->name( 'dashboard.update' );
Route::get( '/dashboard/store', 'DashboardController@store' )->name( 'dashboard.store' );
Route::get( '/dashboard/options', 'DashboardController@options' )->name( 'dashboard.options' );
Route::get( '/dashboard/profile', 'DashboardController@profile' )->name( 'dashboard.profile' );
Route::get( '/dashboard/help', 'DashboardController@help' )->name( 'dashboard.help' );

/**
 * Sign In Specifics Routes
**/

Route::get( '/sign-in', 'SigninController@index' )->name( 'sign-in.index' );
Route::get( '/sign-in/password-lost', 'SigninController@passwordLost' )->name( 'sign-in.password-lost' );
Route::get( '/sign-out', 'SignOutController@index' )->name( 'sign-out.index' );

/**
 * Sign Up specifics routes
**/

Route::get( '/sign-up', 'SignupController@index' )->name( 'sign-up.index' );

/**
 * POST Routes
**/

Route::post( '/sign-in/password-recovery', 'SigninController@sendResetLinkEmail' )->name( 'sign-in.password-recovery' );
Route::post( '/sign-in/login', 'SigninController@login' )->name( 'sign-in.login' );
Route::post( '/sign-up', 'SignupController@submit' )->name( 'sign-up.submit' ); // pick from register trait
Route::post( '/dashboard/options-save', 'DashboardController@optionsSave' )->name( 'dashboard.options-save' );