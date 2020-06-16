<?php
namespace implifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;

class Big implements Size
{

    public function getSize()
    {
        return "Big";
    }
}
