VERSION = 5.7

build:
	docker image build -t mysql-existo:${VERSION} .

test:
	docker container run -d --rm --name test mysql-existo:${VERSION}
	docker container exec -ti test bash
	docker container rm -f test

