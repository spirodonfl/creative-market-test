## Installation

First I ran: `curl -s "https://laravel.build/example-app?with=mysql" | bash` and then `./vendor/bin/sail up` to get everything installed and ready.

I ran: `./vendor/bin/sail php artisan make:model Application -m` to create the application model for storing submissions.

I filled out the models. You can find the specific model created by going to `database/migrations/2021_11_22_064853_create_applications_table.php` which gives you the schema too.

I ran: `./vendbor/bin/sail php artisan migrate` to populate the database as appropriate.

Then I ran: `./vendor/bin/sail php artisan make:controller ApplicationFormController` to make our controller to house our form.

I then setup the form view, validations and submission criteria along with any routes and additional CSS I needed.

To run this locally, run `./vendor/bin/sail migrate` and then `./vendor/bin/sail up`

## Things I did not do

1. Implement the background asset, proper colors, envelope at the end and *full scale* responsive design. However, with a bit more time, Tailwind + the assets would make it easy to resolve these
2. Some of the form elements could have been rendered better in the view. For example, an array of keys which are iterated and html output structured as output would have been far better than manually creating each element individually (especially for select options)
3. Some of the JS could be structured and cleaned up a lot more but I wanted to demonstrate an understanding of vanilla JS with the time I had
4. Instead of submitting the form on the first step if the JS sees empty values, it could be better to have JS check the values itself to skip a submission
5. When you submit a duplicate portfolio link, you do see an error, but all your field values are lost. That should be fixed
6. When you've entered a portfolio link, you are presented with the confirmation checkbox, but it is not validated. That should be validated so you check it
7. When you've entered online stores, that textarea is not valided. It should be validated for values
8. Most of the fields could use better validation methods. Regex, email, strings, etc... should be applied at the JS and Laravel methods
