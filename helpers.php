<?php

use Illuminate\Support\Str;

return [
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'selected' : '';
    },
    'isHomePage' => function ($page) {
        return $page->getPath() == '' ? 'selected' : '';
    },
];
