<?php

namespace SkillUp\Mediator;

use SkillUp\AbstractFactory\Entity\BaseEntity;
use SkillUp\AbstractFactory\Entity\FirstEntity;
use SkillUp\AbstractFactory\Entity\SecondEntity;

class MediatorClass implements Mediator
{

    /**
     * @var FirstEntity
     */
    protected $firstEntity;
    protected $secondEntity = [];

    /**
     * @param FirstEntity $firstEntity
     * @param array       $secondEntity
     */
    public function __construct(FirstEntity $firstEntity, array $secondEntity)
    {
        $this->firstEntity = $firstEntity;
        $this->secondEntity = $secondEntity;
    }


    public function sendData(BaseEntity $baseEntity, $data)
    {
        if ($baseEntity instanceof FirstEntity) {
            $this->firstEntity->setData(array_merge($this->firstEntity->getData(), $data));
        }
        if ($baseEntity instanceof SecondEntity) {
            $temp = $baseEntity->getData();
            $temp[] = $data;
            $this->firstEntity->setData($temp);
        }
    }

    public function getData(BaseEntity $baseEntity)
    {
        if ($baseEntity instanceof SecondEntity) {
            $baseEntity->setData($this->firstEntity->getData());
        }
    }

    public function clearData() {
        $this->firstEntity->setData([]);
    }
}