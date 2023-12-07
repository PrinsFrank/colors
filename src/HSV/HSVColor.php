<?php
declare(strict_types=1);

namespace PrinsFrank\Colors\HSV;

readonly class HSVColor
{
    public function __construct(
        public int $hue,
        public int $saturation,
        public int $value,
    ) {
    }

    public function isInColorRangeIncl(HSVColorRange $colorRange): bool
    {
        return $colorRange->containsIncl($this);
    }

    public function isInColorRangeExcl(HSVColorRange $colorRange): bool
    {
        return $colorRange->containsExcl($this);
    }
}
