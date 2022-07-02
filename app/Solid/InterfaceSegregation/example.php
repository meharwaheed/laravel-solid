<?php
namespace App\Solid\InterfaceSegregation;

class  example {
   public function beManaged() {
       $captain = new Captain();
       $captain->hire(new Worker());
       $captain->hire(new AndroiddWorker());
   }
}

interface WorkerInterface {
  public function work();
  public function sleep();
}

class Worker implements WorkerInterface {

    public function work() {
        echo "Worker is working\n";
    }

    public function sleep() {
        echo "Worker is sleeping\n";
    }
}

class AndroiddWorker implements WorkerInterface {

    public function work() {
        echo "Android worker is working";
    }

    public function sleep() {
        echo "Error Android work cannot sleep";
    }
}

class Captain {

    public function hire(WorkerInterface $worker) {
        $worker->sleep();
        $worker->work();
    }
}
