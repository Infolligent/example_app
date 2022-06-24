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

Route::get('/', function () {
    return view('welcome');
});

// exception handling
Route::get('test/exception/{count}', function ($count) {
    for ($i = 0; $i < $count; $i++) {
        dump($i);
        if ($i == 5) {
            // throw OutOfBoundsException with message 'skipping'
        } else if ($i == 7) {
            // throw OutOfRangeException with message 'ending'
        }
    }
    // catch OutOfBoundsException and continue processing
    // catch OutOfRangeException and stop processing
})->name('testException');

// control flow and iteration
Route::get('test/loop', function () {
    $count = 0;
    do {
        $count++;
        if($count % 5 == 0) {
            // skip this loop
            dump('skipping');
            
            // add code here
        } else if ($count == 13) {
            // stop the loop
            dump('ending');
            
            // add code here
        }
        dump($count);
    } while ($count < 25);
})->name('testLoop');