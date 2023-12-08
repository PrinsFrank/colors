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
     * @covers ::isInColorRange
     */
    public function testIsInColorRangeIncl(): void
    {
        static::assertTrue((new HSVColor(1, 1, 1))->isInColorRange(new HSVColorRange(1, 1, 1, 1, 1, 1)));
    }
}
