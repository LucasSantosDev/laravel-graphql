<?php

namespace App\GraphQL\Query;

use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;
use App\GraphQL\Type\UserType;
use App\User;
use GraphQL;

class UserQuery extends Query
{
    protected $attributes = [
        'name' => 'UserQuery',
        'description' => 'A query for users'
    ];

    public function type()
    {
        return GraphQL::paginate('user');
    }

    public function args()
    {
        return [
            'paginate' => [
                'type' => Type::int(),
                'description' => 'Quantidade de registros'
            ],
            'page' => [
                'type' => Type::int(),
                'description' => 'Paginá especifica'
            ],
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        $paginate = 10;
        if (isset($args['paginate'])) {
            $paginate = $args['paginate'];
        }

        $page = 1;
        if (isset($args['page'])) {
            $page = $args['page'];
        }

        return User::paginate($paginate, ['*'], 'page', $page);
    }
}