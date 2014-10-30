<?php

namespace Tee\Portfolio;
use Route, Config;

Route::group(['prefix' => 'admin'], function() {
    Route::resource('portfolio', __NAMESPACE__.'\Controllers\AdminController',
        ['except' => array('show')]
    );
});