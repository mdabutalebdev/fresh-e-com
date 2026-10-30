<?php

namespace Database\Seeders;

use App\Models\ProductShowcase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ProductShowcaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = [
            [220, 38, 38],
            [22, 163, 74],
            [217, 119, 6],
            [8, 145, 178],
            [219, 39, 119],
            [79, 70, 229],
        ];

        foreach ($colors as $index => $color) {
            ProductShowcase::create([
                'image' => $this->makePlaceholderImage($color, $index),
                'sort_order' => $index,
                'is_active' => true,
            ]);
        }
    }

    private function makePlaceholderImage(array $rgb, int $index): string
    {
        $width = 1600;
        $height = 500;

        $image = imagecreatetruecolor($width, $height);
        $color = imagecolorallocate($image, $rgb[0], $rgb[1], $rgb[2]);
        imagefill($image, 0, 0, $color);

        ob_start();
        imagejpeg($image, null, 85);
        $contents = ob_get_clean();
        imagedestroy($image);

        $path = 'product-showcases/seed-placeholder-'.$index.'.jpg';
        Storage::disk('public')->put($path, $contents);

        return $path;
    }
}
