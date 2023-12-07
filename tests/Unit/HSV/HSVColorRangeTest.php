<?php
declare(strict_types=1);

namespace PrinsFrank\Colors\Tests\HSV;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Colors\HSV\HSVColor;
use PrinsFrank\Colors\HSV\HSVColorRange;

/** @coversDefaultClass \PrinsFrank\Colors\HSV\HSVColorRange */
class HSVColorRangeTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::containsIncl
     */
    public function testContainsIncl(): void
    {
        static::assertTrue(
            (new HSVColorRange(0, 0, 0, 0, 0, 0))
                ->containsIncl(new HSVColor(0, 0, 0))
        );
        static::assertTrue(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(10, 10, 10))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(1, 1, 11))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(1, 11, 1))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(11, 1, 1))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(1, 1, 0))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(1, 0, 1))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsIncl(new HSVColor(0, 1, 1))
        );
    }

    /**
     * @covers ::__construct
     * @covers ::containsExcl
     */
    public function testContainsExcl(): void
    {
        static::assertTrue(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(2, 2, 2))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(1, 2, 2))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(2, 1, 2))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(2, 2, 1))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(10, 2, 2))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(2, 10, 2))
        );
        static::assertFalse(
            (new HSVColorRange(1, 10, 1, 10, 1, 10))
                ->containsExcl(new HSVColor(2, 20, 1))
        );
    }
}
