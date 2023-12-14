<?php

use D4T\Core\Enums\LayoutDirectionType;

return [
    'supported_locales' => [
        'en' => [ 'title' => 'English', 'dir' => LayoutDirectionType::LTR],
        'es' => [ 'title' => 'Spain', 'dir' => LayoutDirectionType::LTR],
        'pt' => [ 'title' => 'Portugal', 'dir' => LayoutDirectionType::LTR],
        'ar' => [ 'title' => 'Arabic', 'dir' => LayoutDirectionType::RTL],
    ],
];
