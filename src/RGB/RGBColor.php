<?php
declare(strict_types=1);

namespace PrinsFrank\Colors\RGB;

use PrinsFrank\Colors\HSV\HSVColor;

readonly class RGBColor
{
    public function __construct(
        public int $red,
        public int $green,
        public int $blue,
    ) {
    }

    public function toHSV(): HSVColor
    {
        $percentageRed   = ($this->red / 255);
        $percentageGreen = ($this->green / 255);
        $percentageBlue  = ($this->blue / 255);

        $highestRGBPercentage = max($percentageRed, $percentageGreen, $percentageBlue);
        $lowestRGBPercentage  = min($percentageRed, $percentageGreen, $percentageBlue);
        $chroma               = $highestRGBPercentage - $lowestRGBPercentage;

        $value = 100 * $highestRGBPercentage;
        if ($chroma === 0.0 || $chroma === 0) {
            return new HSVColor(0, 0, (int) round($value));
        }

        if ($percentageRed === $lowestRGBPercentage) {
            $h = 3 - (($percentageGreen - $percentageBlue) / $chroma);
        } elseif ($percentageBlue === $lowestRGBPercentage) {
            $h = 1 - (($percentageRed - $percentageGreen) / $chroma);
        } else {
            $h = 5 - (($percentageBlue - $percentageRed) / $chroma);
        }

        return new HSVColor((int) round(60 * $h), (int) round(100 * ($chroma / $highestRGBPercentage)), (int) round($value));
    }
}
