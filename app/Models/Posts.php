<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Posts
{
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'First Title',
                'slug' => 'tes-1',
                'body' => 'All of the components in Tailwind UI are provided in three formats: React, Vue, and vanilla HTML.The React and Vue examples are fully functional out-of-the-box, and are powered by Headless UI — a library of unstyled components we designed to integrate perfectly with Tailwind CSS',

            ],
            [
                'id' => '2',
                'title' => 'Second Title',
                'slug' => 'tes-2',
                'body' => 'All of the components in Tailwind UI are provided in three formats: React, Vue, and vanilla HTML.The React and Vue examples are fully functional out-of-the-box, and are powered by Headless UI — a library of styled components we designed to integrate perfectly with Tailwind CSS',

            ],[
                'id' => '3',
                'title' => 'Third Title',
                'slug' => 'tes-3',
                'body' => 'All of the components in Tailwind UI are provided in three formats: React, Vue, and vanilla HTML.The React and Vue examples are fully functional out-of-the-box, and are powered by Headless UI — a library of styled components we designed to integrate perfectly with Tailwind CSS',

            ],[
                'id' => '3',
                'title' => 'Third Title',
                'slug' => 'tes-3',
                'body' => 'All of the components in Tailwind UI are provided in three formats: React, Vue, and vanilla HTML.The React and Vue examples are fully functional out-of-the-box, and are powered by Headless UI — a library of styled components we designed to integrate perfectly with Tailwind CSS',

            ],
        ];
    }

    public static function findBySlug(string $slug): array | null
    {
        return Arr::first(static::all(), fn ($item) => $item['slug'] == $slug);

    }
}
