# Laravel RESTful API example 

A simple example RESTful API in Laravel 8.
## RUN
```
composer install 
php artisan migrate 
php artisan db:seed  
```

## Future 
Improvements can be made in the future, such as adding middleware.

## Endpoints

Get all posts: `GET /api/codes`

Get a single post: `GET /api/codes/{id}`

Create a new post: `POST /api/codes`

Update a post: `PUT /api/codes/{id}`

Delete a post: `DELETE /api/codes/{id}`
