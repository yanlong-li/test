<?php
declare(strict_types=1);

/**12321
 * 枚举测试112321312342342231112312323423123123
 * Class emu 枚举类
 */
class emu
{
    public static function __callStatic($name, $args): array
    {
        static::$emuList[static::class] ??= new static();
        return [static::$emuList[static::class], $name];
    }

    /**
     * 枚举类聚合
     * @var array
     */
    private static array $emuList = [];
}

/**
 * @property
 * Class emuTest
 * @method static A
 * @method static B
 */
class emuTest extends emu
{
}

/**
 * @property
 * Class emuTest
 * @method static A
 * @method static B
 */
class emuTest2 extends emu
{
}

var_dump(emuTest::A(), emuTest2::A());


var_dump(emuTest::A() === emuTest::B());

echo emuTest::B() === emuTest::A();