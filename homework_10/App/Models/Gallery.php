<?php
namespace App\Models; // Модел - класс в котором хранятся данные

use App\Urm\Insert;
use Exception;

class Gallery
{

    public int $id = 0;
    public string $title = '';
    public string $image = '';
    public string $category_name = '';
    public string $category_id = '';
    public string $created = '';
    public string $updated = '';

    private array $gallery = [ // mock объект
        1 => [
            'id' => 1,
            'title' => 'name1',
            'image' => 'image1',
            'category_name' => 'categoryName1',
            'category_id' => 1
        ],
        [
            'id' => 2,
            'title' => 'name2',
            'image' => 'image2',
            'category_name' => 'categoryName2',
            'category_id' => 2
        ],
        [
            'id' => 3,
            'title' => 'name3',
            'image' => 'image3',
            'category_name' => 'categoryName3',
            'category_id' => 3
        ],
        [
            'id' => 4,
            'title' => 'name4',
            'image' => 'image4',
            'category_name' => 'categoryName4',
            'category_id' => 4
        ]
    ];
    public function save(array $data)
    {
        $fields = array_keys($data);
        $values = [array_values($data)];

        $insert = new Insert();
        $insert->setTableName('gallery');
        $insert->setField($fields);
        $insert->setValues($values);
        $insert->execute();
    }

    public function getAllElements(): array
    {
        return $this->gallery;
    }

    public function getElement($id): array
    {
        if (!empty($this->gallery[$id])) {
            return $this->gallery[$id];
        }
        throw new Exception('No post found');
    }

    public function toArray(): array
    {
        return get_class_vars(get_class($this));
    }

}
;