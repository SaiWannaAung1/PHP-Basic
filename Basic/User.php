<?php


class User
{
public $name,$password;
function save_user()
{
    echo "Save User code goes here";
}


}

class Subscriber extends User{
    public $phone,$email;

    function display(){
        echo "Name".$this->name."<br>";
        echo "Password".$this->password."<br>";
        echo "Phone".$this->phone."<br>";
        echo "Email".$this->email."<br>";
    }
}

$object = new Subscriber;
$object->name = "Freed";
$object->password = "12345";
$object->phone = "09898342778";
$object->email = "freed@gmail.com";
$object->display();