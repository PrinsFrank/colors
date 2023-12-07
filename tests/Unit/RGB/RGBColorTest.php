<?php
declare(strict_types=1);

namespace PrinsFrank\Colors\Tests\RGB;

use PHPUnit\Framework\TestCase;
use PrinsFrank\Colors\HSV\HSVColor;
use PrinsFrank\Colors\RGB\RGBColor;

/** @coversDefaultClass \PrinsFrank\Colors\RGB\RGBColor */
class RGBColorTest extends TestCase
{
    /**
     * @covers ::__construct
     * @covers ::toHSV
     */
    public function testToHSV(): void
    {
        static::assertEquals((new RGBColor(0, 0, 0))->toHSV(), new HSVColor(0, 0, 0), 'Black');
        static::assertEquals((new RGBColor(255, 255, 255))->toHSV(), new HSVColor(0, 0, 100), 'White');
        static::assertEquals((new RGBColor(255,0,0))->toHSV(), new HSVColor(0, 100, 100), 'Red');
        static::assertEquals((new RGBColor(0,255,0))->toHSV(), new HSVColor(120, 100, 100), 'Lime');
        static::assertEquals((new RGBColor(0,0,255))->toHSV(), new HSVColor(240, 100, 100), 'Blue');
        static::assertEquals((new RGBColor(255,255,0))->toHSV(), new HSVColor(60, 100, 100), 'Yellow');
        static::assertEquals((new RGBColor(0,255,255))->toHSV(), new HSVColor(180, 100, 100), 'Cyan');
        static::assertEquals((new RGBColor(255,0,255))->toHSV(), new HSVColor(300, 100, 100), 'Magenta');
        static::assertEquals((new RGBColor(191,191,191))->toHSV(), new HSVColor(0, 0, 75), 'Silver');
        static::assertEquals((new RGBColor(128,128,128))->toHSV(), new HSVColor(0, 0, 50), 'Gray');
        static::assertEquals((new RGBColor(128,0,0))->toHSV(), new HSVColor(0, 100, 50), 'Maroon');
        static::assertEquals((new RGBColor(128,128,0))->toHSV(), new HSVColor(60, 100, 50), 'Olive');
        static::assertEquals((new RGBColor(0,128,0))->toHSV(), new HSVColor(120, 100, 50), 'Green');
        static::assertEquals((new RGBColor(128,0,128))->toHSV(), new HSVColor(300, 100, 50), 'Purple');
        static::assertEquals((new RGBColor(0,128,128))->toHSV(), new HSVColor(180, 100, 50), 'Teal');
        static::assertEquals((new RGBColor(0,0,128))->toHSV(), new HSVColor(240, 100, 50), 'Navy');
    }
}
