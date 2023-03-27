# JenhPiTes Travel Blog

The project is a travel blog that is being developed as a final assignment for the third year of the second semester in university. The aim of the project is to provide a platform for students to share their travel experiences, stories, and photos with others.

## Main Features(Frontend & Dashboard):

- User authentication: Users can sign up or log in to access the travel blog.
- Create posts: Admin can create posts that include text, photos, and videos.
- Comment and like: Users can interact with posts by leaving comments.

## Tech Stack:

The application is being developed using the Laravel PHP framework and utilizes several open-source packages. The front-end is built using HTML, CSS, and JavaScript, and utilizes Bootstrap for responsive design. The database is MySQL.

## Purpose:

The purpose of this project is to provide students with an opportunity to learn about web development and apply their knowledge to develop a travel blog. Through this project, students will gain experience in developing a web application with modern technologies, working in a team, and managing a project from start to finish. Additionally, users will be able to use the travel blog to connect, inspire, and learn from one another's travel experiences.

## Table of Contents

- [Installation](#installation)
- [Requirement](#requirement)
- [Tools](#tools)

## Installation

1. Clone the repository.

```
git clone https://github.com/JenhPiTeas/JenhPiTes-Travel-Blog.git
```

2. Navigate to the project directory.

```
cd [project directory]
```

3. Install the project dependencies.

```
composer install
```

4. Copy the `.env.example` file and rename it `.env`.

```
cp .env.example .env
```

5. Generate an application key.

```
php artisan key:generate
```

6. Edit the `.env` file and add your database credentials.

```
DB_DATABASE=[your database name]
DB_USERNAME=[your database username]
DB_PASSWORD=[your database password]
```

7. Run the database migrations.

```
php artisan migrate
```

8. Start the server.

```
php artisan serve
```

9. Run Vite.

```
npm run dev
```

## Requirement
- Laravel v9.52.4
- PHP v8.2.3
- Node v18.14.2
- npm v9.5.0
## Tools
- PHPStorm IDE
- MYSQL Workbench
