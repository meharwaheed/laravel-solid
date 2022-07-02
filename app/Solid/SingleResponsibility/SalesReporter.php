<?php
namespace App\Solid\SingleResponsibility;

use App\Solid\SingleResponsibility\SalesOutputInterface;

class SalesReporter {

    public function __construct(private $repo)
    {

    }

    // The single responsibility principle dictates that a class should have only one
    // reason to change. To illustrate this a bit more, let's dig into a simple example.


    // Now if we want to change query or database logic we can change from Sales Repository not
    // from this class. If we want to change output method we can define new implementtation and
    // call it accordingly

    // Now each class has only one single reason to change

    public function between($start_date, $end_date, SalesOutputInterface $formatter) {
        $sales = $this->repo->betweeen($start_date, $end_date);
        return $formatter->output($sales);
    }

}
