<?php
namespace implifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;

class Red implements Color
{
    public function getColor()
    {
        return "Red";
    }
}
