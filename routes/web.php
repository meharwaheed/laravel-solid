<?php

use App\Solid\SingleResponsibility\HTMLOutput;
use App\Solid\SingleResponsibility\HTMLPageOutput;
use App\Solid\SingleResponsibility\JSONOutput;
use App\Solid\SingleResponsibility\Repositories\SalesRepository;
use App\Solid\SingleResponsibility\SalesReporter;
use Carbon\Carbon;
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

// Signle Responsibility Principle route

Route::get('single', function() {

    $sales = new SalesReporter(new SalesRepository());

    $start_date = Carbon::now()->subDays(10);
    $end_date = Carbon::now();

    //   To view ouptput as JSON Format
    // return $sales->between($start_date, $end_date, new JSONOutput);

        // Inline HTML Output
    // return $sales->between($start_date, $end_date, new HTMLOutput);

    //  to view output as HTML Blade Page
    return $sales->between($start_date, $end_date, new HTMLPageOutput);


});
