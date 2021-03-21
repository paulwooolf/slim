up: docker-up
down: docker-down
stop: docker-stop
build: docker-build
rebuild: stop build up
check: lint sniffer

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-stop:
	docker-compose stop

docker-build:
	docker-compose build

lint:
	docker-compose run --rm api-cli composer lint

sniffer:
	docker-compose run --rm api-cli composer cs-check

# docker-compose run --rm api-cli
