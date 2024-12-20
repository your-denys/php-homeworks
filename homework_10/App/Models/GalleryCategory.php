<?php
namespace App\Models; // Модел - класс в котором хранятся данные
use App\Urm\Insert;
use Exception;

    class GalleryCategory
    {
    public int $id = 0;
     public string $name = '';
    public string $image = '';
    public string $created = '';
    public string $updated = '';

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

    public function save(array $data)
    {
        $fields = array_keys($data);
        $values = [array_values($data)];
    
        $insert = new Insert();
        $insert->setTableName('gallery_category');
        $insert->setField($fields);
        $insert->setValues($values);
        $insert->execute();
    }

    public function getAllElements(): array
    {
        return $this->galleryCategory;
    }

    public function getElement($id): array
    {
        if (!empty($this->galleryCategory[$id])) {
            return $this->galleryCategory[$id];
        }
        throw new Exception(message: 'No post found');
    }

    public function toArray(): array
    {
        return get_class_vars(get_class($this));
    }

};