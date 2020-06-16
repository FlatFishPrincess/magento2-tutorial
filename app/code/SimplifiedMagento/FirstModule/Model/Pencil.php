<?php
namespace implifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;
use SimplifiedMagento\FirstModule\Api\PencilInterface;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getPencilType()
    {
        return "Our pencil has" . $this->color->getColor() . " and " . $this->size->getSize() . " size";
    }
}
