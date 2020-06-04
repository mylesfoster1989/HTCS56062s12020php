
<?php

class DB

{
    private $server = "arfo8ynm6olw6vpn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    private $user = "jo0xc9likdk5o0vx";
    private $pwd = "nvvui8agli8r5q6e";
    private $database = "bhdh4cks7ou9mirv";
    public $connection;

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this --> his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }

}