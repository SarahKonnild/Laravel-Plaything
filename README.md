# Laravel Plaything: An intro

My Laravel Plaything project is nothing more than a small project to familiarize myself with PHP/Laravel, PHPStorm and Composer as a package manager. While most of my challenges here were figuring out the hierarchy of the directories and the setup of the project, it was fun once it finally came afoot. Most of my time I did spend finding out why my app.css file didn't contain anything, but eh, shit happens.

## What does it do?

The project is locally hosted (so even if you use your real e-mail address in the registration, don't worry, I can't see it) and it does two things:
1. It uses laravel/ui auth to create a login and registration system that is stored in a SQLite dataformat. 
2. There is a button that is downloading a suspicious Excel file, that contains nothing but useless data in a specific format.

## How to run
1. Download the repo. 
2. Open the repo in your favourite editor. Whether vim, VS Code, PHPStorm, I don't judge. And we'll keep it between you and your CPU.
3. Make sure you have PHP@7.3 at least, NPM and Composer running on your system (as a wise man in How I Met Your Mother said: "New is always better")
4. Go to the folder with the project and open a terminal. Run _composer install_ and _npm install_ in the repo. This should install all necessary dependencies. 
5. Still in the terminal, run the _php artisan migrate_ command to migrate the database
6. Still in the terminal, run the _php artisan tinker_ command, and then when the prompt is open, run the following command: _Company::factory()->count(10)->create()_ command to populate the database with some randomly generated names. Never mind that the companies are named person-names :)))
7. Staying in the terminal, you should be able to run _npm run dev_, which should start the development environment. 

## Disclaimer
Despite me very religiously being punny and joking that there are malicous files and whatnot, it is purely safe and innocent - check the source :-) 
