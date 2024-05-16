<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        Storage::disk('public')->createDirectory('photos');
        return [
            'path' => $path = Storage::disk('public')->putFile('photos', public_path('default_images/image'.rand(1, 3).'.png')),
            'url' => $url = Str::replaceFirst('storage/public/', '', Storage::disk('public')->url($path)),
            'thumbnail' => $path,
            'thumbnail_url' => $url,
            'size' => 1024 * 1024 * random_int(1, 10),
            'width' => 421,
            'height' => 280,
        ];
    }
}
