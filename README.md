## Assignment

- Users have posts
- Timestamp manage by moment and session.
- On login page I get the timezone of user have save it in session, and on post index page just add the timezone in post.created_at column to show time in user timezone

## Installation

1. Clone the repo and `cd ` into it
2. `composer install`
3. Rename or copy .env.example file to .env
4. `php artisan migrate --seed`
5. `php artisan serve` or use Laravel Valet or Laravel Homestead
6. `npm install`
7. `npm run dev`
8. Visit localhost:8000 in your browser
9. login detail 
   1. user `user@test.com`
   2. password `password`
