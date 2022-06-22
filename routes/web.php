<?php

use App\Solid\OpenClosed\AreaCalculator;
use App\Solid\OpenClosed\Circle;
use App\Solid\OpenClosed\Square;
use App\Solid\OpenClosed\Triangle;
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


// Open Closed Principle route

Route::get('open', function() {

    $square = new Square(100, 100);
    $circle = new Circle(58);
    $trianlge = new Triangle(130,160);


    // Now every class is open for extensions and closed for modifications
    // Now we can calculate area of any shape without modification of AreaCalculator class


    $calculator = new AreaCalculator;

    $area = $calculator->calculate([$square, $circle, $trianlge]);
    return $area;


});
