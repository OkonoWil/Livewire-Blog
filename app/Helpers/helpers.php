<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if (! function_exists('getInitials')) {
    /**
     * Generate a route name for the previous request.
     *
     * @return string|null
     */
    function getInitials(string $name): string
    {
        $initials = '';
        $words = explode(' ', $name);
        foreach ($words as $word) {
            $initials .= strtoupper(substr($word, 0, 1));
        }

        return $initials;
    }
}
