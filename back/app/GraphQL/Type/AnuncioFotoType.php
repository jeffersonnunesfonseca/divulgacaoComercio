<?php

namespace App\GraphQL\Type;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;

class AnuncioFotoType extends GraphQLType
{
    protected $attributes = [
        'name' => 'AnuncioFotoType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [

        ];
    }
}