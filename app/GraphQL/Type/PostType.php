<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'PostType',
        'description' => 'A type for Post'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'O id do post no banco'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'O titulo do post no banco'
            ],
            'active' => [
                'type' => Type::boolean(),
                'description' => 'O status do post no banco'
            ]
        ];
    }
}