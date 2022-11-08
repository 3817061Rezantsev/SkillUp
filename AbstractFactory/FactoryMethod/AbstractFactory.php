<?php

namespace SkillUp\AbstractFactory\FactoryMethod;

use SkillUp\AbstractFactory\Entity\BaseEntity;

abstract class AbstractFactory
{
    abstract function create(): BaseEntity;
}
