
VERSION = 2.4.34

build:
	docker image build -t apache:$(VERSION) .

latest:
	docker image build -t apache:$(VERSION) -t php:latest .

publish:
	docker tag apache\:$(VERSION) existo/apache\:$(VERSION)
	docker push existo/apache\:$(VERSION)

test:
	docker container run -d --rm --name test apache:$(VERSION)
	docker container exec -ti test bash
	docker container rm -f test
