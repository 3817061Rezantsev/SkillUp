<?php

namespace SkillUp\Facade;

use SkillUp\AbstractFactory\Entity\FirstEntity;
use SkillUp\AbstractFactory\Entity\SecondEntity;

class Facade
{
    /**
     * @var FirstEntity
     */
    protected $firstEntity;

    /**
     * @var SecondEntity
     */
    protected $secondEntity;

    /**
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * @param FirstEntity     $firstEntity
     * @param SecondEntity    $secondEntity
     * @param LoggerInterface $logger
     */
    public function __construct(FirstEntity $firstEntity, SecondEntity $secondEntity, LoggerInterface $logger)
    {
        $this->firstEntity = $firstEntity;
        $this->secondEntity = $secondEntity;
        $this->logger = $logger;
    }

    public function exchangeData($data)
    {
        $this->logger->log('Start Process');
        $firstData = $this->firstEntity->organizeData($data);
        $secondData = $this->secondEntity->prepareData();

        $this->secondEntity->organizeData($firstData);
        $this->firstEntity->setData($secondData);

        $this->logger->log('Exchange Done');

        try {
            $this->firstEntity->prepareData();
        }
        catch (\Exception $e) {
            $this->logger->log($e->getMessage());
        }
    }
}