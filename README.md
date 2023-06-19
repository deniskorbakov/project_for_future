## Тестовое задание для - future

____

### Запуск проекта:

* в корне проекта запустить ``docker-compose up -d``
* прописать команду для входа в контейнер ``docker exec -it app bash``
* внутри контейнера прописать:
    * ``php artisan key:generate``
    * ``php artisan config:cache``
    * ``php artisan migrate``
    * ``php artisan db:seed``

___

### Swagger - [перейти](http://localhost:8876/api/documentation)
