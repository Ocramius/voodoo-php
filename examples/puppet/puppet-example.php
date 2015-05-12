<?php

class User
{
    private $name;
    private $surname;

    public function __construct($name, $surname)
    {
        $this->name    = $name;
        $this->surname = $surname;
    }

    public function sayHello()
    {
        return 'Hello, I\'m ' . $this->name . ' ' . $this->surname . '!' . PHP_EOL;
    }
}

class Puppeteer
{
    public $properties = [];

    public function __construct($puppet)
    {
        foreach ((new ReflectionClass($puppet))->getProperties() as $property) {
            Closure::bind(function (& $properties) use ($property) {
                $name = $property->getName();

                $properties[$name] = & $this->$name;
            }, $puppet, $property->getDeclaringClass()->getName())
                ->__invoke($this->properties);
        }
    }
}

$user = new User('James', 'Titcumb');

var_dump($user->sayHello());

$puppeteer = new Puppeteer($user);

$puppeteer->properties['name']    = 'A';
$puppeteer->properties['surname'] = 'Minion';

var_dump($user->sayHello());
