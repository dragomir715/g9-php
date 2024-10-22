<?php

/**
 * final class can not be inherited
 */
class Fruit
{
    public string $name;
    public string $color;
    public string $shape;

    public function __construct(string $name, string $color, string $shape)
    {
        $this->name = $name;
        $this->color = $color;
        $this->shape = $shape;
    }

    public function fall()
    {
        return 'fruit is falling...';
    }

    /**
     * @return string
     * final can not be overridde in child class
     */
    final public function location(): string
    {
      return 'deposit';
    }
}