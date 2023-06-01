<?php

class Home
{
    // Parents:
    use Controller;

    // Methods:
    public function index()
    {
        $data["username"] = "Welcome, guest";
        if(!empty($_SESSION["USER"])){
            $data["username"] = "Welcome, ".$_SESSION["USER"]->username;
        }

        $this->view("home", $data);
    }
}