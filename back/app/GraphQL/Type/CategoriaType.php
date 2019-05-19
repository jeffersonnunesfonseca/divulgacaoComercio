<?php

namespace App\GraphQL\Type;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;

class CategoriaType extends GraphQLType
{
    protected $attributes = [
        'name' => 'CategoriaType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [

        ];
    }
}