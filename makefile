

SHELL               	= bash
PROJECT             	= les_lames_du_ponant
MAKEFILE_AUTHOR     	= Gwendal Bescont

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

 pour se connecter à mysql en root :  1-> database:     mysql -u root -p db_ldp

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

big-daddy: stop prune   ## delete all container, image, environnement

##——————————————————————————————————————————————————————————————————————————————
##                       **  MYSQL  **
##——————————————————————————————————————————————————————————————————————————————A

dump: ## Dump db_extranet and remove old_bdd.sql
	${DOCKER} exec -i ${PROJECT} mysqldump -u root -pexample db_ldp > DockerFiles/SQL/db_ldp 

delete: 
	@rm  DockerFiles/SQL/extranet/db_extranet.sql 
	
drop-db:## Drop the  database (before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP)  doctrine:database:drop --force --no-interaction

##——————————————————————————————————————————————————————————————————————————————
##                        **  LOGS  **
##——————————————————————————————————————————————————————————————————————————————

logs-project: ##  API PROJECT container logs
	@docker logs $(PROJECT) 

##——————————————————————————————————————————————————————————————————————————————
##                       **   BASH ** 
##——————————————————————————————————————————————————————————————————————————————

project: ## Connecting to  API-PHP-API container
	$(DOCKER) exec -it  -w /var/www/  $(PROJECT)  sh

## —— Symfony environnement🎵 ———————————————————————————————————————————————————————————————

sf: ## List all Symfony commands
	$(PHP)

cc: ## Clear the cache. DID YOU CLEAR YOUR CACHE????
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) c:c

warmup: ## Warmup the cache
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) cache:warmup

fix-perms: ## Fix permissions of all var files
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) chmod 777 ./var ./vendor ./php ./

assets: purge ## Install the assets with symlinks in the public folder
	$(SYMFONY) assets:install public/ --symlink --relative

purge: ## Purge cache and logs
	$(DOCKER) exec -it  -w /var  $(PROJECT) rm -rf var/cache/* var/logs/*

entity: ## create Entity (before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) make:entity

migration: ## make migration (before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) make:migration --no-interaction

migrate: ## doctrine migration migrate (before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) doctrine:migration:migrate --no-interaction

migrate-force: ## doctrine migration migrate (before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) doctrine:schema:update --force

crud : ## make crud (create reset delete)(before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) make:crud 

controller : ## make controller (before using this command, connect on your container with make:bash)
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) make:controller 

router : ## debugging App routing
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) debug:router

dispatcher : ## see dispatcher event
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) debug:event-dispatcher
	
framework : ## see framework config
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) debug:config framework 


##——————————————————————————————————————————————————————————————————————————————
##         **   STARTING // RE-BUILD // STOPPING // DUMP-AUTOLOAD ** 
##——————————————————————————————————————————————————————————————————————————————


build: docker-build up install ## Build project, Install vendors according to the current composer.lock file, create  environnement

stop:  down   ## , delete-environnement, stop docker

hard-reset: stop big-daddy build  ## , stop, delete all docker files , restart project , create environnement

autoload: ## dump-autoload all containers
	@docker exec -it -w /var/www/ $(PROJECT) $(COMPOSER) dump-autoload -o

clear-cache : ## clear cache comoser 
	@docker exec -it -w /var/www/ $(PROJECT) $(COMPOSER) clearcache

update-flex: 
	@docker exec -it -w /var/www/ $(PROJECT) $(COMPOSER) update symfony/flex --no-plugins --no-scripts
	
install: ## dump-autoload all containers
	@docker exec -it -w /var/www/ $(PROJECT) $(COMPOSER) install --no-plugins --no-scripts

## —— Project 🐝 ———————————————————————————————————————————————————————————————

start: load-fixtures  ##load-fixtures  serve ## build project,Start docker, load fixtures and start the webserver

reload: unserve restart load-fixtures serve ## Load fixtures 

stop: down  ## Stop docker and the Symfony binary server

commands: ## Display all commands in the project namespace
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) list $(PROJECT)

load-fixtures: ## Build the DB, control the schema validity, load fixtures and check the migration status
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) --env=dev doctrine:cache:clear-metadata
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) --env=dev doctrine:database:create --if-not-exists
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) --env=dev doctrine:schema:drop --force
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) --env=dev doctrine:schema:create
	@docker exec -it -w /var/www/ $(PROJECT) $(PHP) --env=dev doctrine:schema:validate
# @docker exec -it -w /var/www/ $(PROJECT) $(PHP) --env=dev doctrine:fixtures:load --no-interaction

rebuild-database: drop-db create-db migration migrate-force load-fixtures ## Drop database, create database, Doctrine migration migrate,reload fixtures

