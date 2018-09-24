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

// adding
route::post('/add/contact','PhoneBookController@addContact');
// viewing after adding
route::get('/contact/{Pid}/view','PhoneBookController@displayPerson');

// displaying
// route::get('/listcontact','PhoneBookController@listContacts');
route::get('/','PhoneBookController@listContacts');

// deleting
route::get('/delete/{Pid}/contact', 'PhoneBookController@deleteContact');

// viewing profile
route::get('/view/{Pid}/contact', 'PhoneBookController@viewPerson');

// edit
route::get('/edit/{Pid}/contact', 'PhoneBookController@editContact');
route::post('/save/edit', 'PhoneBookController@saveEditContact');

