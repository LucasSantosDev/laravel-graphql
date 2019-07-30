<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'UserType',
        'description' => 'A type for users'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'O id do usuário no banco'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'O nome do usuário no banco'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'O e-mail do usuário no banco'
            ]
        ];
    }
}