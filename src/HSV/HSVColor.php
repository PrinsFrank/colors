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

    public function isInColorRange(HSVColorRange $colorRange): bool
    {
        return $colorRange->contains($this);
    }
}
