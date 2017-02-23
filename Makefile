docker/compose/up: docker/compose/build
	docker-compose up

docker/compose/build:
	docker-compose build

docker/compose/stop:
	docker-compose stop

docker/compose/rm:
	docker-compose rm

run:docker/compose/build docker/compose/up

clean: docker/compose/stop docker/compose/rm
