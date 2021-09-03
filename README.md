# You have to used Linux 20.04
## Step 1: Setup docker!!!

Follow the link to the official documentation, and install step by step according to the instructions docker (docker enginee):
    
> https://docs.docker.com/engine/install/ubuntu/

## Step 2: Run php-apache container.
To run the code on PHP, you must install a container php-apache. If you are first running a project, to install and run the container, you must run the following command

> sudo docker run -d -p 80:80 --name my-apache-php-app -v "$PWD":/var/www/html php:7.2-apache

After that the project is started by a command:

> sudo docker start my-apache-php-app

my-apache-php-app - this is the name of the created container