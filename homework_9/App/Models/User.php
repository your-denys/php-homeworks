<?php
namespace App\Models;
use Exception;
class User {
    private array $user = [
         1 => [
            'id' => 1,
            'image' => 'image1',
            'firstName' => 'John',
            'lastName' => 'Doe',
            'age' => 25,
         ],
         [
            'id' => 2,
            'image' => 'image2',
            'firstName' => 'Mary',
            'lastName' => 'Cole',
            'age' => 21,
         ],
         [
            'id' => 3,
            'image' => 'image3',
            'firstName' => 'Ilon',
            'lastName' => 'Mask',
            'age' => 47,
         ],
         [
            'id' => 4,
            'image' => 'image4',
            'firstName' => 'Donald',
            'lastName' => 'Trump',
            'age' => 72,
         ],
    ];

    public function getAllElements(): array
    {
        return $this->user;
    }

    public function getElement($id): array
    {
        if (!empty($this->user[$id])) {
            return $this->user[$id];
        }
        throw new Exception('No user found');
    }

};