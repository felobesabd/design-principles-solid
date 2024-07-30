<?php

namespace SOLID\ISP;

class Car implements IVehicle, IEntertainment, ISpeedAble
{
    public function move()
    {
        echo 'iam moving';
    }

    public function accelerate()
    {
        echo 'accelerate 2000k.m';
    }

    public function stop()
    {
        echo 'stopping....';
    }

    public function musicPlay()
    {
        echo 'playing favorite music';
    }

    public function pause()
    {
        echo 'pausing music';
    }

    public function rewind()
    {
        echo 'rewind';
    }
}