<?php

namespace SkillUp\AbstractFactory\Entity;

/**
 * Базовая сущность
 * Class BaseEntity
 * @package SkillUp\AbstractFactory\Entity
 */
class BaseEntity
{
    protected $value;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function getClassName()
    {
        return 'SkillUp\AbstractFactory\Entity\BaseEntity';
    }
}
