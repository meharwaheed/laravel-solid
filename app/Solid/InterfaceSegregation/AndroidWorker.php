<?php

namespace App\Solid\InterfaceSegregation;

class AndroidWorker implements  WorkableInterface, ManageableInterface
{
    public function work()
    {
        // TODO: Implement work() method.
        echo "Android worker is working <br>";
    }
    public function beManaged()
    {
        // TODO: Implement beManaged() method.

        $this->work();
    }

}
