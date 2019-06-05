
VERSION = 7.1.23

build:
	docker image build -t php:$(VERSION) .

latest:
	docker image build -t php:$(VERSION) -t php:latest .

publish:
	docker tag php\:$(VERSION) existo/php\:$(VERSION)
	docker push existo/php\:$(VERSION)

#publish:
#	docker tag php:$(VERSION) existodw/php:$(VERSION)
#	docker push existodw/php:$(VERSION)

test:
	docker container run -d --rm --name test php:$(VERSION)
	docker container exec -ti test bash
	docker container rm -f test
