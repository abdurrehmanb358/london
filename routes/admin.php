<?php

use App\Http\Controllers\userController;




Route::get('admin', function () {
    return view('back-panel.dashboard');
});



