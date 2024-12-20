<?php
namespace App\Models;
use App\Urm\Connector;
use App\Urm\Insert;
use Exception;
class Post
{
 public int $id = 0;
public int $category_id = 0 ;
public string $title = '';
public string $body = '';
public string $created = '';
public string $updated = '';



    // private array $allPosts;
    // private array $fields = [];
    // private array $values = [];



    private array $posts =
        [
            1 => [
                'id' => '1',
                'categoryId' => 1,
                'title' => 'post 1',
                'body' => 'postCategory 1',
            ],
            [
                'id' => 2,
                'categoryId' => 2,
                'title' => 'post 2',
                'body' => 'postCategory 2'
            ],
            [
                'id' => 3,
                'categoryId' => 3,
                'title' => 'post 3',
                'body' => 'postCategory 3'
            ],
            [
                'id' => 4,
                'categoryId' => 4,
                'title' => 'post 4',
                'body' => 'postCategory 4'
            ]
        ];

    // public function __construct()
    // {
        // $this->allPosts = $this->getAllElements();
        // $this->getFields();
        // $this->getValues();
        // $this->save($data);,
    // }

    // public function getFields(): void
    // {
    //     $firstPost = $this->allPosts[1];
    //     $this->fields = array_keys($firstPost);
    // }

    // public function getValues(): void
    // {
    //     foreach ($this->allPosts as $post) {
    //         $this->values[] = array_values($post);
    //     }
    // }
    public function save(array $data)
    {
        $fields = array_keys($data);
        $values = [array_values($data)];
    
        $insert = new Insert();
        $insert->setTableName('post');
        $insert->setField($fields);
        $insert->setValues($values);
        $insert->execute();
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

    public function toArray(): array
    {
        return get_class_vars(get_class($this));
        // return [
        //     'id' => $this->id,
        //     'category_id'=> $this->category_id,
        //     'title' => $this->title,
        //     'body' => $this->body,
        //     'created' => $this->created,
        //     'updated' => $this->updated,
        // ];
    }
}
;