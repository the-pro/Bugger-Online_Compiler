# Bugger-Online_Compiler
Online compiler for C,C++,Python,Java.
## About
This is a web application in which users can log in and compile their code.
It has compilers for:-
- C
- C++
- Java
- Python.
## Install
### Prerequisites
- Gcc
- G++
- Python
- Python3
- Java
- Apache2
- Mysql
- Php.
### Procedure
#### Install the compilers:-
To get the above packages run:-

`sudo apt-get install gcc`

`sudo apt-get install python`

`sudo apt-get install python3`

`sudo apt-get install default-jdk`

#### Install Apache2, Mysql, Php
To install apache2, mysql and php run:-

`sudo apt install apache2`

`sudo apt install mysql-server`

`sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php`

To start these services run:-

`sudo systemctl start apache2`

`sudo systemstl start mysql`

Create a new account in mysql database.

Open Terminal and Run:-

`sudo mysql -u root -p`

`GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost' IDENTIFIED BY 'password';`

## Configuration
Open registration/server.php and edit the *database name*,*table name*,*user name*,and *password* as per your choice.

Put all the files inside /var/www/html of your computer.

## Congratulations
Open the file in your local host and you are good to go.
