
# ZOETERMEER VOORUIT Quiz-Website
This project requires NodeJS with Gulp installed globally and Composer.

Clone the repo and run these commands:

```
composer install
npm i
cp .env.example .env
php artisan key:generate
```
Fill in your database credentials in the `.env` file.

Make a VirtualHost [Tutorial](https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-16-04)  and set the Root directory to the `public` folder.

*(Highly discouraged)*
If you are unable to make a VirtualHost use `php artisan serve` to run the project in `localhost:8000`
