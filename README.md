<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).






//--API Documentation----------------------------------------------------------------------------

--Introduction    
       The Gold Investment Platform API provides endpoints for managing posts and categories related to gold investments

--Getting Started
        To get started with the API, follow these steps:
        1-Clone the repository from GitHub:
            git clone  https://github.com/your-username/gold-investment-platform.git
        2-Install the required dependencies using Composer:
          composer install
        3-Set up the environment variables:
         - Rename the .env.example file to .env.
         - Configure the database connection in the .env file.
        4-Run migrations  by running this command on your terminal or cmd prompt :
            php artisan migrate

        5-Start the development server:
            php artisan serve
        
        6-The API is now accessible at http://localhost:8000.



 //-----------------Endpoints-----------------
      
      Posts
      Create a New Post
          URL: POST /api/posts
          Parameters:
          -title (string): The title of the post.
          -content (string): The content of the post.
          -category_ids (array): An array of category IDs to associate with the post.
         - Example Request:
             POST /api/posts
                    {
                    "title": "Introduction to Gold Investment",
                    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    "category_ids": [1, 2]
                    }

          -Example Response:
                                    {
                    "id": 1,
                    "title": "Introduction to Gold Investment",
                    "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    "created_at": "2023-06-26T12:34:56Z",
                    "updated_at": "2023-06-26T12:34:56Z"
                                    }
          

 ----------Retrieve All Posts
 

          URL: GET /api/posts
            Example Request: GET /api/posts
            Example Response:
                                        [
                    {
                        "id": 1,
                        "title": "Introduction to Gold Investment",
                        "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "created_at": "2023-06-26T12:34:56Z",
                        "updated_at": "2023-06-26T12:34:56Z"
                    },
                    {
                        "id": 2,
                        "title": "Benefits of Gold Investments",
                        "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "created_at": "2023-06-25T10:20:30Z",
                        "updated_at": "2023-06-25T10:20:30Z"
                    }
                    ]


---------------Retrieve a Single Post
              

              URL: GET /api/posts/{post}
                Example Request: GET /api/posts/1
                Example Response:
                                            {
                        "id": 1,
                        "title": "Introduction to Gold Investment",
                        "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                        "created_at": "2023-06-26T12:34:56Z",
                        "updated_at": "2023-06-26T12:34:56Z"
                        }



--------------------Update a Post
  
          URL: PUT /api/posts/{post}
          Parameters:
                title (string): The updated title of the post.
                content (string): The updated content of the post.
                category_ids (array): An array of category IDs to associate with the post.
          Example Request:
                PUT /api/posts/1
                {
                "title": "Updated Title",
                "content": "Updated content",
                "category_ids": [2, 3]
                }

          Example Response:
                            {
                "id": 1,
                "title": "Updated Title",
                "content": "Updated content",
                "created_at": "2023-06-26T12:34:56Z",
                "updated_at": "2023-06-26T13:45:12Z"
                }


-----------------Delete a Post
                URL: DELETE /api/posts/{post}
                Example Request: DELETE /api/posts/1
                Example Response:
                         {
                        "message": "Post deleted successfully"
                        }


----------------------Search Posts--------
            URL: GET /api/posts/search
            Parameters:
            query (string): The search query for title or content matching.
            Example Request: GET /api/posts/search?query=gold investment
            Example Response:
                                            [
                        {
                            "id": 1,
                            "title": "Introduction to Gold Investment",
                            "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                            "created_at": "2023-06-26T12:34:56Z",
                            "updated_at": "2023-06-26T12:34:56Z"
                        },
                        {
                            "id": 2,
                            "title": "Benefits of Gold Investments",
                            "content": "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                            "created_at": "2023-06-25T10:20:30Z",
                            "updated_at": "2023-06-25T10:20:30Z"
                        }
                        ]





-------------------------Categories---------------------
     

===========Create a New Category
            URL: POST /api/categories
            Parameters:
                name (string): The name of the category.
                Example Request:
                        POST /api/categories
                        {
                        "name": "Investment Tips"
                        }

                Example Response:
                                        {
                        "id": 1,
                        "name": "Investment Tips",
                        "created_at": "2023-06-26T14:20:30Z",
                        "updated_at": "2023-06-26T14:20:30Z"
                        }

---------------------------Retrieve All Categories
                
                URL: GET /api/categories
                Example Request: GET /api/categories
                Example Response:
                                        [
                        {
                            "id": 1,
                            "name": "Investment Tips",
                            "created_at": "2023-06-26T14:20:30Z",
                            "updated_at": "2023-06-26T14:20:30Z"
                        },
                        {
                            "id": 2,
                            "name": "Market Analysis",
                            "created_at": "2023-06-25T16:30:45Z",
                            "updated_at": "2023-06-25T16:30:45Z"
                        }
                        ]


-----------------------------Retrieve a Single Category
  
                    URL: GET /api/categories/{category}
                    Example Request: GET /api/categories/1
                    Example Response:
                                                        {
                                "id": 1,
                                "name": "Investment Tips",
                                "created_at": "2023-06-26T14:20:30Z",
                                "updated_at": "2023-06-26T14:20:30Z"
                                }



-----------------------------Update a Category
                    URL: PUT /api/categories/{category}
                    Parameters:
                          name (string): The updated name of the category.
                    Example Request:
                        PUT /api/categories/1
                            {
                            "name": "Updated Name"
                            }
                    
                    Example Response:
                                                    {
                            "id": 1,
                            "name": "Updated Name",
                            "created_at": "2023-06-26T14:20:30Z",
                            "updated_at": "2023-06-26T15:10:25Z"
                                                    }


--------------------------Delete a Category

                URL: DELETE /api/categories/{category}
                Example Request: DELETE /api/categories/1
                Example Response:
                    {
                    "message": "Category deleted successfully"
                    }


------------------Post-Category Relationship

  --------------- Assign Categories to a Post
                URL: POST /api/posts/{post}/categories
                Parameters:
                       category_ids (array): An array of category IDs to assign to the post.
                Example Request:
                   POST /api/posts/1/categories
                            {
                            "category_ids": [2, 3]
                            }

                Example Response:
                       {
                        "message": "Categories assigned to the post successfully"
                        }



-------------------  Remove Categories from a Post
                URL: DELETE /api/posts/{post}/categories
                Parameters:
                      category_ids (array): An array of category IDs to remove from the post.
                Example Request:
                   DELETE /api/posts/1/categories
                        {
                        "category_ids": [2, 3]
                        }

                Example Response:
                    {
                    "message": "Categories removed from the post successfully"
                    }


                                                
Authentication and Authorization

Authentication and authorization are required to access certain endpoints. Please refer to the documentation for the specific authentication mechanisms used and the required credentials.


Error Handling
The API returns appropriate HTTP status codes and error messages in case of errors. Refer to the documentation for detailed information on possible error responses.




              



















