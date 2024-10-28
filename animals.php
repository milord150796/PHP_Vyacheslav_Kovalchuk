<?php

abstract class Animals{
    abstract public function makeSound():string;
}
class Dog extends Animals implements CanRun{
    public function makeSound(): string
    {
        return "Dog";
    }
    public function run(): string
    {
        return "the dog is running ";
    }
}

class Cat extends Animals{
    public function makeSound(): string
    {
        return "My cat ";
    }
}

interface CanRun{
    public function run():string;
}
$dog = new Dog();
echo $dog->makeSound() . PHP_EOL;
echo $dog->run() . PHP_EOL;
$cat = new Cat();
echo $cat->makeSound() . PHP_EOL;

// Створіть абстрактний клас Animal з абстрактним методом makeSound().
//  Потім створіть класи Dog і Cat, які реалізують цей метод по-своєму. 
//  Створіть інтерфейс CanRun з методом run(). 
//  Реалізуйте цей інтерфейс у класі Dog.