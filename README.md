# Yii Ent System
This project is a workspace tool build in yii1 framework. This project aims to provide the features and capabilities of yii framework with different kind of project.

# Features
* Yii authentication process
* Yii layout templating
* Yii import - from external classes
* Yii basic account / user management

# How to setup the project

## Step 1 : Setting up php environment.
You need to setup a apache environment into your local machine. here are the following available options in the internet.

***Windows***

***Xampp*** Download [here](https://www.apachefriends.org/index.html).

***Mac OS X*** 

***MAMP*** - Download [here](https://www.mamp.info/en/).

## Step 2 : Download the project
Download the project from github [download](https://github.com/RickAQ-Dev/yii1_ent_system).

## Step 3 : Extraction
Extract the downloaded project files into the ***httpdocs*** directory of your chosen apache simulor application.

## Step 4 : Run Composer
Run ***composer*** to download the required packages/lib of the project. If you don't have an idea regarding ***composer*** I suggest you visit the page [about composer](https://getcomposer.org/doc/00-intro.md).

* Goto directory /httpdocs/[project folder].
* Run from command window / terminal:
`<addr>` composer update `<addr>`

wait until all the packages/lib are downloaded.

## Step 5 : Import Database
If you have a running apache server ( xampp | mamp ) it automatically comes with a MySQL server.
You can import the database included in the project into your MySQL server database.
Database SQL file : **[project folder]/protected/data/system_db-[lastest date]*.sql** ( always use the updated sql file from the directory ).

## Step 6 : Configuring project Database
Update the project database connection from it's configuration file.
You can find the project configurations here : [project folder]/protected/config/database.php

Update the **Database name**, **Username** and **Password**.

## Step 7 : Run the project
Now you have successfully setup the project. You can access the project base on how you setup your project in your local machine.

If you follow the setup here in my instructions you can access the project: **localhost/[project folder]**

# Enjoy and explore 
Enjoy and explore the project and see how the Yii framework works.
