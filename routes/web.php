<?php

use App\Http\Controllers\WelcomeController;


       Route::get('/greeting', [WelcomeController::class, 'greeting']);
       Route::get('/beverage', [WelcomeController::class, 'beverage']);
       Route::get('/beauty', [WelcomeController::class, 'beauty']);
       Route::get('/homecare', [WelcomeController::class, 'homecare']);
       Route::get('/baby', [WelcomeController::class, 'baby']);
       Route::get('/user/{id}/name/{name}', [WelcomeController::class, 'showProfile']);
       Route::get('/sales', [WelcomeController::class, 'sales']);


    
    
   

   
