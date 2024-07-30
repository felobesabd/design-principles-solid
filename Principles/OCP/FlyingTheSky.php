<?php

namespace SOLID\OCP;

class FlyingTheSky implements IMove
{
    public function move(): string
    {
        return 'Iam flying in the sky';
    }
}