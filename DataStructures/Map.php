<?php

namespace SkillUp\DataStructures;

use SplObjectStorage;
use stdClass;

/**
 * Map — это структура, которая хранит данные в парах ключ/значение, где каждый ключ уникален.
 * Иногда её также называют ассоциативным массивом или словарём. Map часто используют для быстрого поиска данных.
 * Она позволяет делать следующие вещи:
 *      добавлять пары в коллекцию;
 *      удалять пары из коллекции;
 *      изменять существующей пары;
 *      искать значение, связанное с определенным ключом.
 */
class Map
{
    /**
     * SplObjectStorage
     * SplObjectStorage это некая структура данных в которой позволительна разная реализация.
     * Вариант 1 - в SplObjectStorage конкретный объект может быть ключем в массиве к данным.
     * Вариант 2 - SplObjectStorage является набором объектов. (для которых существуют разные ООП style функции).
     */
    public function run()
    {
        $s = new SplObjectStorage();

        $o1 = new StdClass;
        $o2 = new StdClass;
        $o3 = new StdClass;

        $s->attach($o1);
        $s->attach($o2);

        var_dump($s->contains($o1)); // bool(true)
        var_dump($s->contains($o2)); // bool(true)
        var_dump($s->contains($o3)); // bool(false)

        $s->detach($o2);

        var_dump($s->contains($o1)); // bool(true)
        var_dump($s->contains($o2)); // bool(false)
        var_dump($s->contains($o3)); // bool(false)
        $s = new SplObjectStorage();

        $o1 = (object)array('a'=>1);
        $o2 = (object)array('b'=>2);
        $o3 = (object)array('c'=>3);

        $s[$o1] = "data for object 1";
        $s[$o2] = array(1,2,3);
        $s[$o3] = 'sample text';

        foreach($s as $i => $key)
        {
            echo "Entry $i:\n";
            var_dump($key, $s[$key]);
            echo "\n";
        }
    }
}
$map = new Map();
$map->run();
