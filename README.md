# user-management-symfony
user management system

## Things you may want to cover:

* Symfony
	Symfony 4.2.1
* PHP
	"php": "^7.1.3"
* Database
	PostgreSQL 9.6.5
* System dependencies
	- doctrine
	- composer
	- symfony
	- monolog
	- doctrine-fixtures
* Configuration
	
## Installation

    git check out https://github.com/dileeppdkr/user-management-symfony.git

    cd /project_folder

    php bin/console doctrine:database:create

    php bin/console doctrine:migrations:migrate

Modify the Datafixtures if required.

    php bin/console doctrine:fixtures:load

    php bin/console server:run
## Usage
1. Login to Admmin dashboard 
2. Add/Edit/Delete Users
3. Add/Edit/Delete Groups 
4. Add Users to any group by clicking add users to group
5. In dashbard you can see users list with groups you selected and you can manage the same.
