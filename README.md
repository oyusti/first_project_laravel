<p align="center"><a href="" target="_blank"><img src="https://user-images.githubusercontent.com/65675939/187299667-431d45e6-8685-4101-92ff-7f0a7ae0fa90.png" width="200"></a></p>


<h1 align="center"> First Project Laravel </h1>
<p align="center">
<img src="https://img.shields.io/github/issues/oyusti/academy">
<img src="https://img.shields.io/github/forks/oyusti/academy">
<img src="https://img.shields.io/badge/status-Under_Development-green">
<img src="https://img.shields.io/github/stars/oyusti?style=social"
</p>

    
## About First_Project_Laravel

<p>This is a mini project with educational purposes carried out in my Introduction to Laravel 9 course. This project shows user posts and how to manage them, in addition, relationships between tables and the corresponding CRUDs are used. In it, the Breeze package is used to perform the system authentication as well as to rely on the styles that it already incorporates with Tailwindcss</p>

<p>In it you will find the following functionalities:</p>


- Connection with database.
- It has 2 interfaces. An interface for the public part and a private interface for administration
- Use of Eloquent ORM for data handling
- CRUD management for data management
- Relationship between tables
- Routes created for the web server for the public and private part
- Authentication system with Breeze
- Use of classes for the frontend created with tailwinds css


## Used technology

- Ubuntu 20.04
- Composer 2.4.0
- PHP 8.0.2
- Laravel/framework 9.19
- Breeze 1.12
- Tailwindcss
- Mysql 8.0.30
- NodeJS 16.17.0
- NPM 8.15.0
- Git 2.25.1


## How to Install

It is necessary that prior to installation you must have installed PHP, Laravel, Mysql or the relational database of your choice, Composer, NodeJS with NPM

-   First, Go to the directory where you want to install and clone the project
In the terminal

   
   
        git clone git@github.com:oyusti/first_project_laravel.git
   
   
   
-   In the terminal Enter the directory 



        cd first_project_laravel
        


-   run "composer install" to install dependencies and then "npm install"


        composer install
        npm install

   
-   Copy the "env_example" file and create the "env" file

-   In your code editor open "env" and put in "DB_DATABASE" the name of your preference for the database.

-   Then create that same database in your database manager. If for example you created DB_DATABASE = admin in the "env" file, you would also create a database with the same name.

-   In the "env" file you must also modify the parameter "DB_USERNAME" which will be the username to access the database and "DB_PASSWORD" which will be the password.

-   In "env" you must also add "APP_KEY" since it will be empty, for this we write in the terminal: 


        php artisan key:generate


-   We will now create the tables and records in the database. In the terminal execute 


        php artisan migrate --seed
        
        
-   If you want the empty tables without records execute the following

        php artisan migrate


-   Remember to always execute the command "npm run dev" in the terminal when starting the server, otherwise you will get an error

        npm run dev


That is all... Happy Code!

=======
# first_project_laravel
Proyecto del curso Introduccion a Laravel 9 de Platzi
>>>>>>> f40bbaa80eefe3d052c27eac9be0c257b0d3917f
