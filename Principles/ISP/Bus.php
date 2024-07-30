<?php

namespace SOLID\ISP;

class Bus implements IVehicle, IEntertainment
{
    public function move()
    {
        echo 'iam moving';
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