<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Yaml\Yaml;

Route::get('/', function () {
    $presetPath = base_path('content/presets/distillery/kings_county.yaml');
    $data = file_exists($presetPath) ? Yaml::parseFile($presetPath) : [];

    return view('page', array_merge([
        'title' => 'Kings County Distillery — Premier NYC Craft Whiskey',
        'meta_description' => 'Kings County Distillery is NYC oldest craft whiskey distillery in the Brooklyn Navy Yard.',
    ], $data));
})->name('home');
