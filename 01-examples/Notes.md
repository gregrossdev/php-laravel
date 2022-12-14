## traversy-api 
### sqlite
```
database/database.sqlite
```

## laraveller-rest-api
```shell
# model && migration
php artisan make:model Skill -m
```

```shell
# request
php artisan make:request StoreSkillRequest
```

```shell
# resources
php artisan make:resource SkillResource
php artisan make:resource SkillCollection
```

## laraveller-api-resources
[docs](https://laravel.com/docs/9.x/eloquent-resources)
```shell
# model, migration, controller, factory 
php artisan make:model Post -mcf
```

```shell
# seed db from factory 
php artisan migrate:fresh --seed
```

```shell
# resource
php artisan make:resource PostResource
php artisan make:resource UserResource
```
https://www.section.io/engineering-education/how-to-create-an-api-using-laravel/

## section.io-api
```shell
# model, migration, factory
php artisan make:model Task -mf
```

```shell
# database seed
php artisan db:seed
```

```shell
# controller, CRUD functionalities
php artisan make:controller TaskController --resource
```
