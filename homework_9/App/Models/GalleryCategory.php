<?php
namespace App\Models; // Модел - класс в котором хранятся данные

use Exception;
class GalleryCategory
{
    private array $galleryCategory = [ // mock объект
        1 => [
            'id' => 1,
            'name' => 'categoryName1',
            'image' => 'image1',
        ],
        [
            'id' => 2,
            'name' => 'categoryName2',
            'image' => 'image2',
        ],
        [
            'id' => 3,
            'name' => 'categoryName3',
            'image' => 'image3',
        ],
        [
            'id' => 4,
            'name' => 'categoryName4',
            'image' => 'image4',
        ]
    ];
    public function getAllElements(): array
    {
        return $this->galleryCategory;
    }
    public function getElement($id): array
    {
        if (!empty($this->galleryCategory[$id])) {
            return $this->galleryCategory[$id];
        }
        throw new Exception('id is absent');
    }
}
;