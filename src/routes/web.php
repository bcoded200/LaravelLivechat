<?php

use Illuminate\Support\Facades\Route;

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



Route::middleware(['web','auth'])->namespace('Coded\Codedlivechat\Http\Controllers')->prefix('livechat')->group( function () {

    Route::get('/', 'CodedlivechatController@index')->name('livechat.index');

    Route::get('/adminreply/{ticket_id}', 'CodedlivechatController@adminreply')->name('livechat.admin.reply');
    Route::post('/adminreplysend/{ticket_id}', 'SendmessageController@adminsend')->name('livechat.adminreply.send');


    Route::post('/storelivechat', 'CodedlivechatController@storeLiveChat')->name('livechat.store');

    Route::post('/messages','SendmessageController@send')->name('send.messages');
    Route::post('/replyback/{ticket_id}','SendmessageController@replyback')->name('replyback.message');

    Route::post('/adminsend/{ticket_id}','SendmessageController@adminsend')->name('adminsend.message');

    Route::any('/message-chat/{ticket_id}','CodedlivechatController@messagechat')->name('view.message');

    Route::any('/delete-ticket/{ticket_id}','CodedlivechatController@deleteticket')->name('delete.ticket');


});
