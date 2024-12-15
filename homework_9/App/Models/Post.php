<?php
namespace App\Models;
use App\Urm\Connector;
use App\Urm\Insert;
use Exception;
class Post
{
    private array $posts =
        [
            1 => [
                'id' => '1',
                'postCategoryId' => 1,
                'name' => 'post 1',
                'category' => 'postCategory 1',
            ],
            [
                'id' => 2,
                'postCategoryId' => 2,
                'name' => 'post 2',
                'category' => 'postCategory 2'
            ],
            [
                'id' => 3,
                'postCategoryId' => 3,
                'name' => 'post 3',
                'category' => 'postCategory 3'
            ],
            [
                'id' => 4,
                'postCategoryId' => 4,
                'name' => 'post 4',
                'category' => 'postCategory 4'
            ]
        ];

    public function __construct()
    {
        $allPosts = $this->getAllElements();

        if (empty($allPosts)) {
            throw new Exception('No data available to insert.');
        }

        $firstPost = $allPosts[1];
        $fields = array_keys($firstPost);
        $values = [];
        foreach ($allPosts as $post) {
            $values[] = array_values($post);
        }
        $insert = new Insert();
        $insert->setTableName('posts');
        $insert->setField($fields);
        $insert->setValues($values);
        echo $insert->buildUrm();
    }

    public function getAllElements(): array
    {
        return $this->posts;
    }

    public function getElement($id): array
    {
        if (!empty($this->posts[$id])) {
            return $this->posts[$id];
        }
        throw new Exception('No post found');
    }
}
;