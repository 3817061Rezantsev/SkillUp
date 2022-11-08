<?php

namespace SkillUp\AbstractFactory\FactoryMethod;

use SkillUp\AbstractFactory\Entity\BaseEntity;
use SkillUp\AbstractFactory\Entity\FirstEntity;

class FirstEntityFactory extends AbstractFactory
{
    protected $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }


    function create() : BaseEntity
    {
        return new FirstEntity($this->value);
    }
}
