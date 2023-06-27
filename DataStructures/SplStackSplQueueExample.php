<?php

namespace SkillUp\DataStructures;


/**
 * Двусвязный список - это динамическая структура данных, состоящая из узлов, содержащих данные и ссылки на предыдущий
 * и следующий узел списка.
 *
 * Стек - абстрактный тип данных, представляющий собой список элементов, организовваный по принципу LIFO(last-in-first-out)
 * Очередь - абстрактный тип данных, представляющий собой список элементов, организовваный по принципу FIFO(first-in-first-out)
 *
 * SplStack и SplQueue предоставляют основные функциональные возможности стека, реализованные
 * с использованием двусвязного списка.
 *
 * Применяются, когда нужно сохранить последовательость поступления данных.
 *
 */
class SplStackSplQueueExample
{
    public function run()
    {
        $stack = new \SplStack();
        $queue = new \SplQueue();
        $array = ['first', 'second', 'third'];
        foreach ($array as $value) {
            $stack->push($value);
            $queue->push($value);
        }
        while (!$stack->isEmpty()) {
            echo $stack->pop();
        }
        while (!$queue->isEmpty()) {
            echo $queue->pop();
        }
    }
}

$splStackSplQueueExample = new SplStackSplQueueExample();
$splStackSplQueueExample->run();
