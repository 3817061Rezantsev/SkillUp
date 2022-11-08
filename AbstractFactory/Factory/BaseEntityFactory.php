<?php

namespace SkillUp\AbstractFactory\Factory;

use SkillUp\AbstractFactory\Entity\BaseEntity;

class BaseEntityFactory implements AbstractFactoryInterface
{

    public function create()
    {
        return new BaseEntity('BaseEntity');
    }
}
