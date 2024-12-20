<?php
namespace App\Models;
use App\Urm\Insert;
use Exception;

class User {
    public int $id = 0;
    public string $first_name = '' ;
    public string $last_name = '';
    public string $image = '';
    public int $age = 0;
    public string $created = '';
    public string $updated = '';

    private array $user = [
         1 => [
            'id' => 1,
            'image' => 'image1',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'age' => 25,
         ],
         [
            'id' => 2,
            'image' => 'image2',
            'first_name' => 'Mary',
            'last_name' => 'Cole',
            'age' => 21,
         ],
         [
            'id' => 3,
            'image' => 'image3',
            'first_name' => 'Ilon',
            'last_name' => 'Mask',
            'age' => 47,
         ],
         [
            'id' => 4,
            'image' => 'image4',
            'first_name' => 'Donald',
            'last_name' => 'Trump',
            'age' => 72,
         ],
    ];

    public function save(array $data)
    {
        $fields = array_keys($data);
        $values = [array_values($data)];
    
        $insert = new Insert();
        $insert->setTableName('user');
        $insert->setField($fields);
        $insert->setValues($values);
        $insert->execute();
    }

    public function getAllElements(): array
    {
        return $this->user;
    }

    public function getElement($id): array
    {
        if (!empty($this->user[$id])) {
            return $this->user[$id];
        }
        throw new Exception('No post found');
    }

    public function toArray(): array
    {
        return get_class_vars(get_class($this));
    }

};