<?php
declare(strict_types=1);

namespace PrinsFrank\Colors\Tests\HSV;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Colors\HSV\HSVColor;
use PrinsFrank\Colors\HSV\HSVColorRange;

/** @coversDefaultClass \PrinsFrank\Colors\HSV\HSVColor */
class HSVColorTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::isInColorRangeExcl
     */
    public function testIsInColorRangeExcl(): void
    {
        static::assertTrue((new HSVColor(1, 1, 1))->isInColorRangeExcl(new HSVColorRange(0, 2, 0, 2, 0, 2)));
    }

    /**
     * @covers ::__construct
     * @covers ::isInColorRangeIncl
     */
    public function testIsInColorRangeIncl(): void
    {
        static::assertTrue((new HSVColor(1, 1, 1))->isInColorRangeIncl(new HSVColorRange(1, 1, 1, 1, 1, 1)));
    }
}
