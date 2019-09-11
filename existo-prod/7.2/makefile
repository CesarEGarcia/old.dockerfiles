NAME    = httpd
VERSION = 7.2.1

build:
	docker image build -t ${NAME}:$(VERSION) .

nocache:
	docker image build -t ${NAME}:$(VERSION) --no-cache .

# latest:
# 	docker image build -t existo-dev:$(VERSION) -t existo-dev:7.2.latest .

publish:
	docker tag ${NAME}:$(VERSION) docker.existo.net/${NAME}:$(VERSION)
	docker push docker.existo.net/${NAME}:$(VERSION)

test:
	docker container run -d --rm --name test existo-dev:$(VERSION)
	docker container exec -ti test bash
	docker container rm -f test

