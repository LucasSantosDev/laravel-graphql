<?php

namespace App\GraphQL\Query;

use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;
use App\GraphQL\Type\PostType;
use App\Post;
use GraphQL;

class PostQuery extends Query
{
    protected $attributes = [
        'name' => 'PostQuery',
        'description' => 'CRUD - Posts'
    ];

    public function type()
    {
        return GraphQL::paginate('post');
    }

    public function args()
    {
        return [
            
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        return Post::paginate();
    }
}