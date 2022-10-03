<?php

$person = function($name){
    return $name;
};

var_dump($person('Alejandro'));

function teste(){
    $person = function(){
        return "teste";
    };
    return $person;
}

var_dump(teste());

/*class Person{
    public function __invoke(){
        return 'teste';
    }
}

$person=new Person; */