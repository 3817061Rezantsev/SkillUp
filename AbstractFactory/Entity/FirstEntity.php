<?php

namespace SkillUp\AbstractFactory\Entity;

/**
 * Сущность, которую я создал первой.
 * Да, я виду отсчет от нуля
 * Class FirstEntity
 * @package SkillUp\AbstractFactory\Entity
 */
class FirstEntity extends BaseEntity
{
    protected $firstEntityField;

    /**
     * @param $firstEntityField
     */
    public function __construct($firstEntityField)
    {
        parent::__construct($firstEntityField);
        $this->firstEntityField = $firstEntityField;
    }

    public function getClassName()
    {
        return 'SkillUp\AbstractFactory\Entity\FirstEntity';
    }
}
