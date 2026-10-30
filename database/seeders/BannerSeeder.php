<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'title' => 'Summer Sale is Live',
                'description' => 'Up to 40% off on electronics and fashion essentials.',
                'button_one_text' => 'Shop Now',
                'button_one_url' => '#featured',
                'button_two_text' => 'View Deals',
                'button_two_url' => '#featured',
                'color' => [79, 70, 229],
            ],
            [
                'title' => 'New Arrivals Weekly',
                'description' => 'Fresh drops across every category, every week.',
                'button_one_text' => 'Explore',
                'button_one_url' => '#featured',
                'button_two_text' => null,
                'button_two_url' => null,
                'color' => [16, 185, 129],
            ],
            [
                'title' => null,
                'description' => null,
                'button_one_text' => null,
                'button_one_url' => null,
                'button_two_text' => null,
                'button_two_url' => null,
                'color' => [244, 63, 94],
            ],
        ];

        foreach ($slides as $index => $slide) {
            $path = $this->makePlaceholderImage($slide['color'], $index);

            Banner::create([
                'title' => $slide['title'],
                'description' => $slide['description'],
                'button_one_text' => $slide['button_one_text'],
                'button_one_url' => $slide['button_one_url'],
                'button_two_text' => $slide['button_two_text'],
                'button_two_url' => $slide['button_two_url'],
                'media' => $path,
                'media_type' => 'image',
                'sort_order' => $index,
                'is_active' => true,
            ]);
        }
    }

    private function makePlaceholderImage(array $rgb, int $index): string
    {
        $width = 1600;
        $height = 700;

        $image = imagecreatetruecolor($width, $height);
        $color = imagecolorallocate($image, $rgb[0], $rgb[1], $rgb[2]);
        imagefill($image, 0, 0, $color);

        ob_start();
        imagejpeg($image, null, 85);
        $contents = ob_get_clean();
        imagedestroy($image);

        $path = 'banners/seed-placeholder-'.$index.'.jpg';
        Storage::disk('public')->put($path, $contents);

        return $path;
    }
}
