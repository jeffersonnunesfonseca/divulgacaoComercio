<?php

namespace App\GraphQL\Query;

use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;
use App\Models\Anuncio\AnuncioModel as Anuncio;
use GraphQL;

class AnuncioQuery extends Query
{
    protected $attributes = [
        'name' => 'Anuncio',
        'description' => 'A query'
    ];

    public function type()
    {
        return GraphQL::type('AnuncioType');
    }

    public function args()
    {
        return [
            'id'=>[
                'id' =>'id',
                'type' => Type::nonNull(Type::int())
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        return Anuncio::find($args['id']);
    }
}