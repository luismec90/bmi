<?php

Route::group(['namespace' => 'Montoya\BMI\Controllers', 'prefix' => 'montoya/bmi'], function () {
    Route::get('/', ['as' => 'bmi_path', 'uses' => 'BMIController@index']);
});