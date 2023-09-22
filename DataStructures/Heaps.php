<?php

namespace SkillUp\DataStructures;

use SplMaxHeap;
use SplMinHeap;
use SplPriorityQueue;

class Heaps
{
    /**
     * Кучи - структура данных, представляющая собой дерево, удовлетворяющее свойству кучи: если В является узлом-
     * потомком узла А, то ключ А больше ключа В. Следовательно, корневым узлом будет элемент с наибольшим ключем.
     * Такие кучи называют max-кучами. Если корневой узел содержит минимальный ключ, куча называется min-кучей.
     *
     * Применяются, если необходимо хранить данные в упорядоченном виде. При использовании кучи поиск определенного
     * элемента может быть сделан за линейное время.
     *
     * SplHeap реализует основную функциональность кучи и является абстрактным классом.
     * От SplHeap наследуются два класса:
     * SplMaxHeap – для сортировки массива по убыванию его значений, SplMinHeap – для сортировки массива по возрастанию.
     *
     * SplPriorityQueue — обеспечивает основные функциональные возможности приоритетной очереди,
     * реализованный при помощи кучи (max-heap). Сортировка производится в зависимости от приоритета.
     * Далее следует обычный алгоритм вытаскивания элекментов из структуры.
     */
    public function runSplHeap()
    {
        echo "SplMinHeap \n";
        $heap = new SplMinHeap();
        $heap->insert('1');
        $heap->insert('2');
        $heap->insert('3');

        echo $heap->count() . "\n"; // 3
        echo $heap->key() . "\n"; // 2
        echo $heap->current() . "\n"; // 1
        echo $heap->extract() . "\n"; // 1
        echo $heap->extract() . "\n"; // 2
        echo $heap->extract() . "\n"; // 3

        echo "SplMaxHeap \n";
        $heap = new SplMaxHeap();
        $heap->insert('1');
        $heap->insert('2');
        $heap->insert('3');

        echo $heap->current() . "\n"; // 3
        echo $heap->extract() . "\n"; // 3
        echo $heap->extract() . "\n"; // 2
        echo $heap->extract() . "\n"; // 1
    }

    public function runSplPriorityQueue()
    {
        echo "SplPriorityQueue \n";
        $queue = new SplPriorityQueue();
        $queue->setExtractFlags(SplPriorityQueue::EXTR_DATA); // получаем только значения элементов
        $queue->insert('Q', 9);
        $queue->insert('w', 8);
        $queue->insert('e', 7);
        $queue->insert('r', 6);
        $queue->insert('t', 5);
        $queue->insert('y', 4);
        $queue->insert('1', 3);
        $queue->insert('2', 2);
        $queue->insert('3', 1);

        $queue->top();

        while($queue->valid())
        {
            echo $queue->current();
            $queue->next();
        }
    }
}

$heaps = new Heaps();
//$heaps->runSplHeap();
$heaps->runSplPriorityQueue();