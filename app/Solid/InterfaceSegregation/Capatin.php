<?php

namespace App\Solid\InterfaceSegregation;

class Capatin
{
    public function manage(ManageableInterface $worker)
    {
        $worker->beManaged();
    }

}
