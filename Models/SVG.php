<?php

namespace Model;

class SVG
{
    private int $height;
    private int $width;
    private array $shape;

    public function __construct(array $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    /**
     * @return array
     */
    public function getShape(): array
    {
        return $this->shape;
    }
}