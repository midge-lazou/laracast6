<?php


namespace App;


class Example
{
    protected $collaborator;

    protected $foo;

    /**
     * Example constructor.
     * @param $collaborator
     */
    public function __construct(Collaborator $collaborator, $foo)
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }
}
