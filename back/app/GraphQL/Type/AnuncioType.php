<?php

namespace App\GraphQL\Type;


use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class AnuncioType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Anuncio',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [

            'id' => [
                
                'type' => Type::nonNull(Type::int())
            ],
            'id_cliente' => [
                'type' => Type::nonNull(Type::int())
            ],
            'id_categoria' => [
                'type' => Type::nonNull(Type::int())
            ],
            'descricao' => [
                'type' => (Type::string())
            ],
            'endereco' => [
                'type' => Type::nonNull(Type::string())
            ],
            'cep' => [
                'type' => (Type::int())
            ],
            'numero' => [
                'type' => Type::nonNull(Type::int())
            ],
            'complemento' => [
                'type' => (Type::string())
            ],
            'bairro' => [
                'type' => Type::nonNull(Type::string())
            ],
            'horario_abre' => [
                'type' => (Type::string())
            ],
            'horario_fecha' => [
                'type' => (Type::string())
            ],
            'foto_principal' => [
                'type' => (Type::string())
            ],
            'data_criacao' => [
                'type' => (Type::string())
            ],
            'data_atualizacao' => [
                'type' => (Type::string())
            ],
            'deleted' => [
                'type' => (Type::int())
            ],
            'status' => [
                'type' => (Type::int())
            ]
        ];
    }
}