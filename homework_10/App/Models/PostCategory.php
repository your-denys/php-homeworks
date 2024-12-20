<?php
namespace App\Models;
use App\Urm\Connector;
use App\Urm\Insert;
use Exception;



class PostCategory
{
    public int $id = 0;
     public string $name = '';
    public string $image = '';
    public string $created = '';
    public string $updated = '';

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

        public function save(array $data)
        {
            $fields = array_keys($data);
            $values = [array_values($data)];
        
            $insert = new Insert();
            $insert->setTableName('post_category');
            $insert->setField($fields);
            $insert->setValues($values);
            $insert->execute();
        }
    
        public function getAllElements(): array
        {
            return $this->postCategory;
        }
    
        public function getElement($id): array
        {
            if (!empty($this->postCategory[$id])) {
                return $this->postCategory[$id];
            }
            throw new Exception('No post found');
        }
    
        public function toArray(): array
        {
            return get_class_vars(get_class($this));
        }
    
    };