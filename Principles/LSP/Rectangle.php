<?php

namespace SOLID\LSP;

class Rectangle
{
    protected int $width;
    protected int $height;

//    public function __construct(int $width, int $height)
//    {
//        $this->width = $width;
//        $this->height = $height;
//    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    public function calculateArea(): int
    {
        return $this->getWidth() * $this->getHeight();
    }

}