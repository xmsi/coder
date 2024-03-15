<?php

namespace App\Enums;

enum ProjectType:int {
    case Own = 0;
    case Partner = 1;

    public function getLabel(): string
    {
        return match ($this) {
            self::Own => __('Проекты'),
            self::Partner => __('Партнёрские проекты')
        };
    }
}