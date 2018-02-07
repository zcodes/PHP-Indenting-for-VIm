<?php

$user->hello()
    ->world()
    ->again();

$user
    ->hello()
    ->world()
    ->again();

$user_with_long_name->hello()
    ->world()
    ->again();

$user_with_long_name
    ->hello()
    ->world()
    ->again();

$user->hello(
    'foo', 'bar'
)
    ->world()
    ->again();

$user
    ->hello(
        'foo', 'bar'
    )
    ->world()
    ->again();

$user_with_long_name->hello(
    'foo', 'bar'
)
    ->world()
    ->again();

$user_with_long_name
    ->hello(
        'foo', 'bar'
    )
    ->world()
    ->again();

$user->hello(function () {

})
    ->world()
    ->again();

$user
    ->hello(function () {

    })
    ->world()
    ->again();

$user_with_long_name->hello(function () {

})
    ->world()
    ->again();

$user_with_long_name
    ->hello(function () {

    })
    ->world()
    ->again();
