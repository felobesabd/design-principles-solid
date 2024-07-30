<?php

namespace SOLID\ISP;

class Truck implements IVehicle, IHeavy
{
    public function move()
    {
        echo 'iam moving';
    }

    public function stop()
    {
        echo 'stopping....';
    }

    public function CarryHeavyCargo()
    {
        echo 'Carrying heavy cargo';
    }
}