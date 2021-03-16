up: docker-up
down: docker-down
stop: docker-stop
build: docker-build
init: stop build up

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-stop:
	docker-compose stop

docker-build:
	docker-compose build

# docker-compose run --rm api-cli
