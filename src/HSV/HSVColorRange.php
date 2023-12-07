<?php
declare(strict_types=1);

namespace PrinsFrank\Colors\HSV;

readonly class HSVColorRange
{
    public function __construct(
        public int $hueMin,
        public int $hueMax,
        public int $saturationMin,
        public int $saturationMax,
        public int $valueMin,
        public int $valueMax,
    ) {
    }

    public function containsIncl(HSVColor $hsvColor): bool
    {
        return $hsvColor->hue        >= $this->hueMin
            && $hsvColor->hue        <= $this->hueMax
            && $hsvColor->saturation >= $this->saturationMin
            && $hsvColor->saturation <= $this->saturationMax
            && $hsvColor->value      >= $this->valueMin
            && $hsvColor->value      <= $this->valueMax;
    }

    public function containsExcl(HSVColor $hsvColor): bool
    {
        return ! $this->containsIncl($hsvColor);
    }
}
