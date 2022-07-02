<?php

namespace App\Solid\DependencyInversion;

class Example
{
    public function test() {
        $password_remember = new PasswordRemember(new MYSQLConnection());
        $password_remember->remember();

        $password_remember = new PasswordRemember(new MongoDBConnection());
        $password_remember->remember();
    }
}

interface ConnectionInterface {

    public function connect();
}

class MYSQLConnection implements ConnectionInterface {

    public function connect()
    {
        // TODO: Implement connect() method.
        echo "MYSQL Connection Succeeded";
    }
}

class MongoDBConnection implements ConnectionInterface {

    public function connect()
    {
        // TODO: Implement connect() method.
        echo "MongoDB Connected";
    }
}

class PasswordRemember {
    public function __construct(private ConnectionInterface $connection) {
    }

   public function remember() {
//        DB::connection($this->connection)->table('reminder')->save(); // just dummy example
        echo "Password save with db with " . get_class($this->connection) . '<br>';
   }
}
