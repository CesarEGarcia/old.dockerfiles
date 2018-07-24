
NAME = httpd
VERSION = 2.4.27

help:
	@echo "    build: Crea una imagen"
	@echo "    it:    Ejecuta el contenedor en modo interactivo"
	@echo "    run:   Ejecuta el contenedor en modo demonio"
	@echo ""

build:
	docker image build --rm -t $(NAME):$(VERSION) -t $(NAME):latest  .

nocache:
	clear
	docker image build --no-cache -t $(NAME):$(VERSION) .

images:
	docker image ls

clearcontainers:
	docker container rm $(docker container ls -aq)

clearimages:
	docker image rm $(docker image ls -aq)

clearvolume:
	docker volume rm $(docker volume ls |awk '{print $2}')

clearall:
	rm -rf ~/Library/Containers/com.docker.docker/Data/*

stop:
	docker container stop cesar

run:
	docker container run --rm -dit -p 80:80 \
		-v ${PWD}:/webapp $(NAME)

it:
	docker container run --rm -it -p 80:80 \
		-v ${PWD}:/webapp $(NAME) bash
