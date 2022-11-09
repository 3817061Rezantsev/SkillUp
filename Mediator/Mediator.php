<?php

namespace SkillUp\Mediator;

use SkillUp\AbstractFactory\Entity\BaseEntity;

interface Mediator
{
    public function sendData(BaseEntity $baseEntity, $data);

    public function getData(BaseEntity $baseEntity);
}