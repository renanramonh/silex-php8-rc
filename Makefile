build:
	docker-compose build
	docker-compose run composer
	
init: build start

start:
	docker-compose up -d php nginx
	
stop:
	docker-compose stop
	
logs:
	docker-compose logs -f

enter:
	docker-compose exec php sh

test-units:
	docker-compose exec php ./vendor/bin/phpunit tests
