<?php

namespace App\Solid\InterfaceSegregation;

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{

    public function sleep()
    {
        // TODO: Implement sleep() method.
        echo "Human worker is sleeping <br>";
    }

    public function work()
    {
        // TODO: Implement work() method.
        echo "Human worker is working <br>";
    }

    public function beManaged()
    {
        // TODO: Implement beManaged() method.
        $this->work();
        $this->sleep();
    }

}
