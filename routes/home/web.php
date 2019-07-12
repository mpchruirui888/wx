<?php
/**
 * Created by PhpStorm.
 * User: lrving
 * Date: 2019/7/11
 * Time: 16:02
 */

Route::group(['prefix' => 'user', 'namespace' => 'User'], function () {
    //小程序获取用户信息
    Route::post('/info', 'UserController@getinfo');
    //小程序获取用户手机号
    Route::post('/phone', 'UserController@getPhone');
});