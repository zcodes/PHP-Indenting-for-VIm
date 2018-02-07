<?php

class User
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function hello()
    {
        echo "hello, my name is " . $this->name;
    }
}

class Student extends User
{
    public function __construct()
    {
        parent::__construct();
    }
}

$user = new User();
$user
    ->hello()
    ->world();


function user_hello()
{
    $user = new User();
    $user->hello(
        'args'
    )
        ->world();

    $user->name->toUpperCase()
        ->method(function () {
            echo "hello";
        })
        ->world(function() {

        });

    $user->name(function () {
        'world'
    })
        ->world(function() {
            //
        })
        ->hello(function() {
            $user->hello(function () {
            })
                ->world(function() {

                })
                ->hello();
        });
}
