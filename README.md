# Yii Ent System
This project is a workspace tool build in yii1 framework. This aims to feature the capabilities of yii framework with different kind of projects.

# Features
* Yii authentication process
* Yii layout templating
* Yii import - from external classes
* Yii basic account / user management

# How to setup the project

## Step 1 : Setting up PHP Environment.
You need to setup an Apache environment into your local machine. Here are the following options available in the internet.

***Windows***

***Xampp*** Download [here](https://www.apachefriends.org/index.html).

***Mac OS X*** 

***MAMP*** - Download [here](https://www.mamp.info/en/).

## Step 2 : Download the Project
Download the project from github [download](https://github.com/RickAQ-Dev/yii1_ent_system).

## Step 3 : Extraction
Extract the downloaded .zip file into your ***httpdocs*** directory (this vary depending in your chosen application).

## Step 4 : Prerequisites | Run Composer
Run ***composer*** to download the required packages/lib of the project. If you don't have an idea regarding ***composer*** I suggest you visit the page [about composer](https://getcomposer.org/doc/00-intro.md).

* Goto directory /httpdocs/[project folder].
* Run comman in your command window for windows | terminal for mac osx:

``` composer update ```

*Wait until all the packages/lib are downloaded.*

### Prerequisites
The project also requires the following module. ( it's not yet available in composer )

#### yii1-module-acc-mngr [GitHub](https://github.com/RickAQ-Dev/yii1-module-acc-mngr)

NOTE : *Follow the instruction carefully to setup the modules into your project.*

## Step 5 : Import Database
If you have a running apache server ( xampp | mamp ) it automatically comes with a MySQL server.
You can import the database included in the project into your MySQL server database.
Database SQL file : **[project folder]/protected/data/system_db-[lastest date]*.sql** ( always use the updated sql file from the directory ).

## Step 6 : Configuring Database Connection
Update the project database connection from it's configuration file.
You can find the project configurations here : [project folder]/protected/config/database.php

Update the **Database name**, **Username** and **Password**.

## Step 7 : Run the project
Now you have successfully setup the project. You can access the project base on how you setup your project in your local machine.

If you follow the setup here in my instructions you can access the project: **localhost/[project folder]**

# Explore and Enjoy
Explore the Yii framework structure and Enjoy coding!!!.
