<?php

namespace App\Solid\SingleResponsibility;
use App\Solid\SingleResponsibility\SalesOutputInterface;
class JSONOutput implements SalesOutputInterface {

   public function output($sales)
   {
     return json_encode(['total_sales' => $sales]);
   }
}
