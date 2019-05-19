docker-compose -f dev.yml up -d --build
compose install

graphql configs
https://github.com/rebing/graphql-laravel

graphql tutorial basico
https://www.youtube.com/watch?v=KaxB8wPeTkI

criar type
php artisan make:graphql:type AnuncioType
php artisan make:graphql:type AnuncioFotoType
php artisan make:graphql:type ClienteType
php artisan make:graphql:type CategoriaType

php artisan make:graphql:query AnuncioQuery
php artisan make:graphql:query AnuncioFotoQuery
php artisan make:graphql:query ClienteQuery
php artisan make:graphql:query CategoriaQuery


busca bairro do anuncio
http://localhost:8880/graphql?query=query{anuncio(id:%201){bairro}}

