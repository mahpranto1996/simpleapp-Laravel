##Installation

This App build with Laravel framework which version is 7.
Steps you should follow the installation process of this app:
	1)First you need to install php version 7.4 or above.
	3)You should install Apache
	2)You should install mysql and php myadmin.
	3)If you ignore this steps please install XAMPP Windows OS or MAMP for MacOS.
	4)Then you need to install composer.
	5)Now you should install git.
	6)Then you should write command git clone respository hhtps under the (XAMMP/MAMP)/htdocs folder.
	7)After Successfull clone you need to open the clone folder and open the terminal under this folder.
	8)Then try to execute 'php artisan serve' command to run this project.
	9)If successfully run then you should go to your localhost/phpmyadmin and create a database name simpleapp.
	10)If your database username and password is different please update this in .env file of this project under the DB connection settings.
	11)The again go to terminal of your project and execute 'php artisan migrate' command for update migration on your database.
	12)If you ignore this steps i also upload simpleapp.sql file in this repository and import this database.
	13)Now again go to terminal and execute 'php artisan serve' command for run this project and go to your localhost url.
	14)Then you see Add user page and you can add user.
	15)In Login option under the nav section, you can login to view all guest user list.
	16)In simpleapp.sql file i already add one admin.

			Phone: 1611111111
			password: admin

    17) Use this credential for login or you can add an user from manually database insert with phone and hash password.