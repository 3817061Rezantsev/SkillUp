<?php

namespace SkillUp\AbstractFactory\FactoryMethod;

use SkillUp\AbstractFactory\Entity\BaseEntity;
use SkillUp\AbstractFactory\Entity\SecondEntity;

class SecondEntityFactory extends AbstractFactory
{
    protected $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = json_decode($value);
    }


    function create(): BaseEntity
    {
        return new SecondEntity($this->value);
    }
}