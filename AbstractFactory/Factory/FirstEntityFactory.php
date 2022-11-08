<?php

namespace SkillUp\AbstractFactory\Factory;

use SkillUp\AbstractFactory\Entity\FirstEntity;

class FirstEntityFactory implements AbstractFactoryInterface
{

    public function create()
    {
        return new FirstEntity('FirstEntity');
    }
}
