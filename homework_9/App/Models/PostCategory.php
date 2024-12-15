<?php
namespace App\Models;
use Exception;
class PostCategory
{

    private array $postCategory =
        [
            1 => [
                'id' => '1',
                'image' => 'image1',
                'name' => 'postCategory 1',
            ],
            [
                'id' => 2,
                'image' => 'image2',
                'name' => 'postCategory 2'
            ],
            [
                'id' => 3,
                'image' => 'image3',
                'name' => 'postCategory 3'
            ],
            [
                'id' => 4,
                'image' => 'image4',
                'name' => 'postCategory 4'
            ]
        ];

    public function getAllElements(): array
    {
        return $this->postCategory;
    }

    public function getElement($id): array
    {
        if (!empty($this->postCategory[$id])) {
            return $this->postCategory[$id];
        }
        throw new Exception('No post Category found');
    }
}
;