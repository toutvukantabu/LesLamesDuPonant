
## —— Docker 🐳 ————————————————————————————————————————————————————————————————
up: ## Start the docker hub (MySQL,phpMyadmin,php)
	$(DOCKER_COMP) up -d

docker-build: ## Builds the PHP image
	$(DOCKER_COMP) build 

down: ## Stop the docker hub
	$(DOCKER_COMP) down --remove-orphans

destroy:## destroy  docker containers
	$(DOCKER_COMP) rm -v --force --stop || true

restart:
	$(DOCKER_COMP) restart $$(docker  -l -c )

bash: ## Connect to the application container
	$(DOCKER) exec -it  www_docker_symfony  bash

kill-r-containers: ## Kill all running containers 
	$(DOCKER) kill $$(docker ps -q)

delete-s-containers: ## Delete all stopped containers
	$(DOCKER) rm $$(docker ps -a -q)

delete-images: ## Delete Delete all images
	$(DOCKER) rmi $$(docker images -q)

stop-containers: ## Stop all containers
	docker stop `docker ps -q`

## —— Stripe 💳 ————————————————————————————————————————————————————————

stripe : ## install stripe
	$(DOCKER) exec  www_docker_symfony composer require stripe/stripe-php

## —— Project 🐝 ———————————————————————————————————————————————————————————————
build : docker-build up  install update stripe   ## Build project, Install vendors according to the current composer.lock file, install symfony cli, Stripe

start: load-fixtures  ##load-fixtures  serve ## build project,Start docker, load fixtures and start the webserver

reload: unserve restart load-fixtures serve ## Load fixtures 

stop: down  ## Stop docker and the Symfony binary server

commands: ## Display all commands in the project namespace
	$(SYMFONY) list $(PROJECT)

load-fixtures: ## Build the DB, control the schema validity, load fixtures and check the migration status
	$(SYMFONY) --env=dev doctrine:cache:clear-metadata
	$(SYMFONY) --env=dev doctrine:database:create --if-not-exists
	$(SYMFONY) --env=dev doctrine:schema:drop --force
	$(SYMFONY) --env=dev doctrine:schema:create
	$(SYMFONY) --env=dev doctrine:schema:validate
	$(SYMFONY) --env=dev doctrine:fixtures:load --no-interaction

rebuild-database: drop-db create-db migration migrate-force load-fixtures ## Drop database, create database, Doctrine migration migrate,reload fixtures

create-db:## Create the database
	$(SYMFONY)  --env=dev doctrine:database:create --if-not-exists --no-interaction

drop-db:## Drop the  database (before using this command, connect on your container with make:bash)
	$(SYMFONY)  doctrine:database:drop --force --no-interaction


SHELL               	= bash
PROJECT             	= www_docker_symfony
GIT_AUTHOR          	= Ma-Sauvegarde
MAKEFILE_AUTHOR     	= Gwendal Bescont
HTTP_PORT_API       	= 3307
HTTP_PORT_EXTRANET  	= 3307
HTTP_PORT_THROTTLING	= 3308


# Executables
EXEC_PHP      = php
COMPOSER      = composer
GIT           = git

# Alias
PHP			  = $(EXEC_PHP) bin/console
# if you use php you can replace "with: $(EXEC_PHP) bin/console"

# Executables: local only
apt-get       = sudo apt-get
DOCKER        = docker
DOCKER_COMP   = docker-compose

# Misc
.DEFAULT_GOAL = help
.PHONY       = 

PRIVILEGES = "GRANT ALL ON *.* TO 'someuser'@'%' IDENTIFIED BY 'complex-password';GRANT ALL ON *.* TO 'anl'@'%' IDENTIFIED BY 'NOUIQZOHQZOIUZQDIZJOQDI';GRANT ALL ON *.* TO 'extradbuser'@'%' IDENTIFIED BY 'NOUIQZOHQZOIUZQDIZJOQDI';FLUSH PRIVILEGES;"


# Help message bash
define message-bash-mysql = 
——————————————————————————————————————————————————————————————————————————————
						 INFOS DE CONNEXION : 
——————————————————————————————————————————————————————————————————————————————

 pour se connecter à mysql en root :  1-> extranet:     mysql -u root -p db_extranet
			 
 password : example 

endef

message-mysql:; @ $(info $(message-bash-mysql)) :

##——————————————————————————————————————————————————————————————————————————————
##                 **  VIEW FULL COMMAND  ** 
##——————————————————————————————————————————————————————————————————————————————

help: ## Outputs this help screen (viw full commands tape: make help )
	@grep -E '(^[a-zA-Z0-9_-]+:.*?##.*$$)|(^##)' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}{printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}' | sed -e 's/\[32m##/[33m/'
##——————————————————————————————————————————————————————————————————————————————
##                    **   DOCKER  ** 
##——————————————————————————————————————————————————————————————————————————————

up: ## Starting docker hub 
	$(DOCKER_COMP) up -d

docker-build: ## Building docker images
	$(DOCKER_COMP) build 

down: ## Down docker hub
	$(DOCKER_COMP) down --remove-orphans

restart: ## restarting docker containers 
	$(DOCKER_COMP) restart $$(docker  -l -c )	

##——————————————————————————————————————————————————————————————————————————————
##                  **    Deleting container|volume|image commands **  
##——————————————————————————————————————————————————————————————————————————————

destroy: ## destroying  docker containers
	$(DOCKER_COMP) rm -v --force --stop || true

prune: ## removing all stopped containers 
	@docker system prune -a --volumes

delete-containers: ## deleting docker container
	$(Docker) rm -vf --force

big-daddy: $ destroy prune delete-containers  ## delete all container, image, environnement

##——————————————————————————————————————————————————————————————————————————————
##                       **  MYSQL  **
##——————————————————————————————————————————————————————————————————————————————A

dump:delete-extranet granted-extranet ## Dump db_extranet and remove old_bdd.sql
	${DOCKER} exec -i ${EXTRANET} mysqldump -u root -pexample db_extranet > DockerFiles/SQL/extranet/db_extranet.sql 

delete: 
	@rm  DockerFiles/SQL/extranet/db_extranet.sql 
	
drop-db:## Drop the  database (before using this command, connect on your container with make:bash)
	$(SYMFONY)  doctrine:database:drop --force --no-interaction

	

##——————————————————————————————————————————————————————————————————————————————
##                        **  LOGS  **
##——————————————————————————————————————————————————————————————————————————————

logs-project: ##  API PROJECT container logs
	@docker logs $(PROJECT) 


##——————————————————————————————————————————————————————————————————————————————
##                       **   BASH ** 
##——————————————————————————————————————————————————————————————————————————————

project: ## Connecting to  API-PHP-API container
	$(DOCKER) exec -it  -w /var/www/html/  $(PROJECT)  sh


## —— Symfony environnement🎵 ———————————————————————————————————————————————————————————————

sf: ## List all Symfony commands
	$(SYMFONY)

cc: ## Clear the cache. DID YOU CLEAR YOUR CACHE????
	$(SYMFONY) c:c

warmup: ## Warmup the cache
	$(SYMFONY) cache:warmup

fix-perms: ## Fix permissions of all var files
	sudo chmod 777 ./var ./vendor ./php ./

assets: purge ## Install the assets with symlinks in the public folder
	$(SYMFONY) assets:install public/ --symlink --relative

purge: ## Purge cache and logs
	rm -rf var/cache/* var/logs/*

entity: ## create Entity (before using this command, connect on your container with make:bash)
	$(SYMFONY) make:entity

migration: ## make migration (before using this command, connect on your container with make:bash)
	$(SYMFONY) make:migration --no-interaction

migrate: ## doctrine migration migrate (before using this command, connect on your container with make:bash)
	$(SYMFONY) doctrine:migration:migrate --no-interaction

migrate-force: ## doctrine migration migrate (before using this command, connect on your container with make:bash)
	$(SYMFONY) doctrine:schema:update --force

crud : ## make crud (create reset delete)(before using this command, connect on your container with make:bash)
	$(SYMFONY) make:crud 

controller : ## make controller (before using this command, connect on your container with make:bash)
	$(SYMFONY) make:controller 

router : ## debugging App routing
	$(SYMFONY) debug:router

dispatcher : ## see dispatcher event
	$(SYMFONY) debug:event-dispatcher
	
framework : ## see framework config
	$(SYMFONY) debug:config framework 


##——————————————————————————————————————————————————————————————————————————————
##         **   STARTING // RE-BUILD // STOPPING // DUMP-AUTOLOAD ** 
##——————————————————————————————————————————————————————————————————————————————


build: docker-build up  ## Build project, Install vendors according to the current composer.lock file, create  environnement

stop:  down   ## , delete-environnement, stop docker


hard-reset: stop big-daddy build  ## , stop, delete all docker files , restart project , create environnement

autoload: ## dump-autoload all containers
	@docker exec -it -w /var/www/html/ $(PROJECT) $(COMPOSER) dump-autoload -o
