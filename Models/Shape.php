<?php

namespace Model;

class Shape
{
    private string $fill;
    private string $strokeWidth;
    private string $stroke;
    private Point $point;
    private Size $size;

    public function __construct() {
        $this->point = new Point();
        $this->size = new Size();
    }

    /**
     * @return Size
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * @return Point
     */
    public function getPoint(): Point {
        return $this->point;
    }

    /**
     * @return string
     */
    public function getFill(): string
    {
        return $this->fill;
    }

    /**
     * @param string $fill
     */
    public function setFill(string $fill): void
    {
        $this->fill = $fill;
    }

    /**
     * @return string
     */
    public function getStrokeWidth(): string
    {
        return $this->strokeWidth;
    }

    /**
     * @param string $strokeWidth
     */
    public function setStrokeWidth(string $strokeWidth): void
    {
        $this->strokeWidth = $strokeWidth;
    }

    /**
     * @return string
     */
    public function getStroke(): string
    {
        return $this->stroke;
    }

    /**
     * @param string $stroke
     */
    public function setStroke(string $stroke): void
    {
        $this->stroke = $stroke;
    }


}