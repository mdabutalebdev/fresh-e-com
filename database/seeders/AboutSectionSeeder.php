<?php

namespace Database\Seeders;

use App\Models\AboutSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (AboutSection::exists()) {
            return;
        }

        AboutSection::create([
            'title' => 'About Our Company',
            'paragraph_one' => 'We are dedicated to bringing you the freshest, highest quality products sourced directly from trusted farms and producers.',
            'paragraph_two' => 'With years of experience and a passion for quality, we make sure every item that reaches your home meets our strict standards.',
            'button_text' => 'Learn More',
            'button_url' => '#',
            'image' => $this->makePlaceholderImage(),
            'is_active' => true,
        ]);
    }

    private function makePlaceholderImage(): string
    {
        $width = 800;
        $height = 600;

        $image = imagecreatetruecolor($width, $height);
        $color = imagecolorallocate($image, 200, 30, 36);
        imagefill($image, 0, 0, $color);

        ob_start();
        imagejpeg($image, null, 85);
        $contents = ob_get_clean();
        imagedestroy($image);

        $path = 'about-section/seed-placeholder.jpg';
        Storage::disk('public')->put($path, $contents);

        return $path;
    }
}
