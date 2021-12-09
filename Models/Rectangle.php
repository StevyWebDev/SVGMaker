<?php

namespace Model;

class Rectangle extends Shape
{
    private string $shape;

    /**
     * @return string
     */
    public function getShape(): string
    {
        return 'rect';
    }

    /**
     * @param string $shape
     */
    public function setShape(string $shape): void
    {
        $shape = 'rect';
        $this->shape = $shape;
    }
}