<?php

namespace App\Solid\SingleResponsibility;
use App\Solid\SingleResponsibility\SalesOutputInterface;
class HTMLOutput implements SalesOutputInterface {

   public function output($sales)
   {
     return "<h1>Total Sales: $$sales</h1>";
   }
}
