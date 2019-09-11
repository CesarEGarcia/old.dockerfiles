NAME = pureftpd
VERSION = 1.0.49

build:
	docker image build -t ${NAME}:${VERSION} .

# latest:
# 	docker image build -t existo-dev:$(VERSION) -t existo-dev:7.1.latest .

publish:
	docker tag ${NAME}:$(VERSION) docker.existo.net/${NAME}:$(VERSION)
	docker push docker.existo.net/${NAME}:$(VERSION)

test:
	docker container run -d --rm --name test ${NAME}:${VERSION}
	docker container exec -ti test bash
	docker container rm -f test

