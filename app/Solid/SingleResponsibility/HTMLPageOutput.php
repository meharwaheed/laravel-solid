<?php

namespace App\Solid\SingleResponsibility;
use App\Solid\SingleResponsibility\SalesOutputInterface;
class HTMLPageOutput implements SalesOutputInterface {

   public function output($sales)
   {
     return view('sales')->with('sales', $sales);
   }
}
