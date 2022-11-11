<?php

namespace SkillUp\AbstractFactory\Entity;

use SkillUp\Mediator\Mediator;

/**
 * Базовая сущность
 * Class BaseEntity
 * @package SkillUp\AbstractFactory\Entity
 */
class BaseEntity
{
    protected $value;

    /**
     * @var array
     */
    protected $data;

    /**
     * @var Mediator
     */
    protected $mediator;

    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function sendData($data)
    {
        $this->mediator->sendData($this, $data);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    public function getClassName(): string
    {
        return 'SkillUp\AbstractFactory\Entity\BaseEntity';
    }

    public function prepareData(): array
    {
        sort($this->data);
        return $this->data;
    }

    public function organizeData($data): array
    {
        $this->data[] = $data;
        sort($this->data);
        return $this->data;
    }
}
