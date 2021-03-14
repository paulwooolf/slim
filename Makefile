up: docker-up
down: docker-down
stop: docker-stop

docker-up:
	docker-compose up -d

docker-down:
	docker-compose down

docker-stop:
	docker-compose stop
