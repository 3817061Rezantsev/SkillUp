<?php

namespace SkillUp\AbstractFactory\Entity;

/**
 * Class SecondEntity
 * @package SkillUp\AbstractFactory\Entity
 */
class SecondEntity extends BaseEntity
{
    protected $secondEntityField;

    /**
     * @param $secondEntityField
     */
    public function __construct($secondEntityField)
    {
        parent::__construct($secondEntityField);
        $this->secondEntityField = $secondEntityField;
    }

    public function getClassName()
    {
        return 'SkillUp\AbstractFactory\Entity\SecondEntity';
    }
}