<?php
class User
{
    public $nickname;
    public $password;

    function DisplayInfo()
    {
        echo "User's nickname is {$this->nickname} and password is {$this->password}";
    }


}