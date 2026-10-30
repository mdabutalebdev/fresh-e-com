<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'platform' => 'Facebook',
                'url' => '#',
                'icon' => 'fa-brands fa-facebook',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'platform' => 'Instagram',
                'url' => '#',
                'icon' => 'fa-brands fa-instagram',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'platform' => 'X (Twitter)',
                'url' => '#',
                'icon' => 'fa-brands fa-x-twitter',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'platform' => 'LinkedIn',
                'url' => '#',
                'icon' => 'fa-brands fa-linkedin',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'platform' => 'WhatsApp',
                'url' => '#',
                'icon' => 'fa-brands fa-whatsapp',
                'is_active' => false,
                'sort_order' => 5,
            ]
        ];

        foreach ($links as $link) {
            \App\Models\SocialLink::create($link);
        }
    }
}
