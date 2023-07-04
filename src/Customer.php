<?php

namespace Acehsingkilprogrammer\BelajarComposerLibrary;

class Customer
{

    public function __construct(private string $name)
    {

    }

    public function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }
}