<?php

namespace App\Service\User\Gallery;

use Illuminate\Support\Collection;

class ListService
{
    /**
     * Handle gallery list and return collection
     *
     * @param array $filters
     * @return Collection
     */
    public function handle(array $filters = []): Collection
    {
        $galleries = [
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-1.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-2.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-3.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-4.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-5.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-6.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-7.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-9.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-1.jpg',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-2.png',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-3.jpg',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-4.PNG',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-5.jpg',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-6.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-7.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-8.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-9.webp',
            ],
            [
                'alt' => 'HoiAnRoots - Coffee making class at Hoi An',
                'url' => 'hoianroots-coffee-making-class-10.webp',
            ],
        ];

        // Convert to collection
        $collection = collect($galleries);

        return $collection;
    }
}
