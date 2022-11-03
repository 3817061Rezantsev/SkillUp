<?php

namespace SkillUp\AbstractFactory\Factory;

/**
 * Абстрактная фабрика, необходима для создания фабрик и выстраивания иерархии между фабричными классами
 * Class AbstractFactory
 * @package SkillUp\AbstractFactory\Factory
 */
abstract class AbstractFactory
{
    public abstract function create();
}
