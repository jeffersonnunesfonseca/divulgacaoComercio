<?php

namespace App\GraphQL\Type;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;

class ClienteType extends GraphQLType
{
    protected $attributes = [
        'name' => 'ClienteType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [

        ];
    }
}